<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function checkIn(Request $request)
    {
        $employeeId = session('employee_id');
        $now = Carbon::now('Asia/Kolkata');
        $today = $now->toDateString();
        $time = $now->format('H:i:s');

        // Rules:
        // 9:30 AM to 9:40 AM -> Present
        // After 9:40 AM -> Late
        // Before 9:30 AM -> Disabled

        if ($now->lt($now->copy()->setTime(9, 30))) {
            return back()->with('error', 'Login is disabled before 9:30 AM.');
        }

        if ($now->gt($now->copy()->setTime(11, 0))) {
            return back()->with('error', 'Check-in is disabled after 11:00 AM. Please contact HR if you are late.');
        }

        $attendance = Attendance::firstOrNew([
            'employee_id' => $employeeId,
            'date' => $today,
        ]);

        if ($attendance->login_time) {
            return back()->with('error', 'You have already checked in today.');
        }

        $attendance->login_time = $time;

        if ($now->lte($now->copy()->setTime(9, 40))) {
            $attendance->status = 'Present';
        } else {
            $attendance->status = 'Late';
            $attendance->late_count = 1;
        }

        $attendance->save();

        return back()->with('success', 'Checked in successfully as ' . $attendance->status);
    }

    public function checkOut(Request $request)
    {
        $employeeId = session('employee_id');
        $now = Carbon::now('Asia/Kolkata');
        $today = $now->toDateString();
        $time = $now->format('H:i:s');

        // Rules:
        // 5:45 PM to 8:00 PM -> Enabled
        // After 8:00 PM -> Disabled

        if ($now->lt($now->copy()->setTime(17, 45))) {
            return back()->with('error', 'Logout is enabled after 5:45 PM.');
        }

        if ($now->gt($now->copy()->setTime(20, 0))) {
            return back()->with('error', 'Logout is disabled after 8:00 PM.');
        }

        $attendance = Attendance::where('employee_id', $employeeId)
            ->where('date', $today)
            ->first();

        if (!$attendance) {
            return back()->with('error', 'No check-in record found for today.');
        }

        if ($attendance->logout_time) {
            return back()->with('error', 'You have already checked out today.');
        }

        $attendance->logout_time = $time;
        $attendance->save();

        return back()->with('success', 'Checked out successfully.');
    }

    public function report(Request $request)
    {
        $query = Attendance::with('employee')->orderBy('date', 'desc');

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
        return view('admin.attendance.report', compact('attendances', 'filter'));
    }
}
