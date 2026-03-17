<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Notification;
use Carbon\Carbon;

class EmployeePortalController extends Controller
{
    public function showLogin()
    {
        return view('employee.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'dob' => 'required|date',
        ]);

        $employee = Employee::where('employee_id', $request->employee_id)
            ->where('dob', $request->dob)
            ->first();

        if ($employee) {
            session(['employee_id' => $employee->id]);
            return redirect()->route('employee.dashboard');
        }

        return back()->with('error', 'Invalid Employee ID or Date of Birth');
    }

    public function dashboard(Request $request)
    {
        $employee = Employee::findOrFail(session('employee_id'));
        $notifications = Notification::where('employee_id', $employee->id)
            ->orWhereNull('employee_id')
            ->orderBy('created_at', 'desc')
            ->get();

        $query = Attendance::where('employee_id', $employee->id)->orderBy('date', 'desc');

        // Apply Filters
        $filter = $request->query('filter', 'all');
        if ($filter == 'weekly') {
            $query->where('date', '>=', Carbon::now()->startOfWeek());
        } elseif ($filter == 'monthly') {
            $query->where('date', '>=', Carbon::now()->startOfMonth());
        } elseif ($filter == 'yearly') {
            $query->where('date', '>=', Carbon::now()->startOfYear());
        }

        $attendances = $query->get();
        $todayAttendance = Attendance::where('employee_id', $employee->id)
            ->where('date', Carbon::now('Asia/Kolkata')->toDateString())
            ->first();

        $workingDaysCount = \App\Models\Setting::where('key', 'monthly_working_days')->first()?->value ?? 22;

        return view('employee.dashboard', compact(
            'employee',
            'notifications',
            'attendances',
            'filter',
            'workingDaysCount',
            'todayAttendance'
        ));
    }

    public function profile()
    {
        $employee = Employee::findOrFail(session('employee_id'));
        return view('employee.profile', compact('employee'));
    }

    public function updateProfile(Request $request)
    {
        $employee = Employee::findOrFail(session('employee_id'));

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'contact' => 'required|string|max:20',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/profile_images');
            $image->move($destinationPath, $name);
            $validated['profile_image'] = $name;

            // Delete old image if exists
            if ($employee->profile_image && file_exists(public_path('profile_images/' . $employee->profile_image))) {
                @unlink(public_path('profile_images/' . $employee->profile_image));
            }
        }

        $employee->update($validated);

        return back()->with('success', 'Profile updated successfully');
    }

    public function logout()
    {
        session()->forget('employee_id');
        return redirect()->route('employee.login');
    }

    public function attendance(Request $request)
    {
        $employee = Employee::findOrFail(session('employee_id'));

        $month = $request->query('month', Carbon::now('Asia/Kolkata')->month);
        $year = $request->query('year', Carbon::now('Asia/Kolkata')->year);

        $selectedDate = Carbon::createFromDate($year, $month, 1, 'Asia/Kolkata');
        $startOfMonth = $selectedDate->copy()->startOfMonth();
        $endOfMonth = $selectedDate->copy()->endOfMonth();

        $attendances = Attendance::where('employee_id', $employee->id)
            ->whereBetween('date', [$startOfMonth->toDateString(), $endOfMonth->toDateString()])
            ->orderBy('date', 'asc')
            ->get();

        $monthPresentCount = $attendances->whereIn('status', ['Present', 'Late'])->count();
        $monthLeaveCount = $attendances->whereIn('status', ['On Leave', 'Absent'])->count();

        $workingDaysCount = \App\Models\Setting::where('key', 'monthly_working_days')->first()?->value ?? 22;

        // Generate months selection (last 12 months)
        $availableMonths = [];
        for ($i = 0; $i < 12; $i++) {
            $m = Carbon::now('Asia/Kolkata')->subMonths($i);
            $availableMonths[] = [
                'month' => $m->month,
                'year' => $m->year,
                'label' => $m->format('M Y')
            ];
        }

        return view('employee.attendance', compact(
            'employee',
            'attendances',
            'monthPresentCount',
            'monthLeaveCount',
            'workingDaysCount',
            'startOfMonth',
            'endOfMonth',
            'availableMonths',
            'month',
            'year'
        ));
    }
}
