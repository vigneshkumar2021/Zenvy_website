<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $workingDaysCount = \App\Models\Setting::where('key', 'monthly_working_days')->first()?->value ?? 22;
        return view('admin.employees.index', compact('employees', 'workingDaysCount'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|unique:employees',
            'name' => 'required',
            'designation' => 'required',
            'salary' => 'required|numeric',
            'dob' => 'required|date',
            'contact' => 'required',
            'email' => 'required|email|unique:employees',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('/profile_images'), $name);
            $validated['profile_image'] = $name;
        }

        Employee::create($validated);

        return redirect()->route('admin.employees.index')->with('success', 'Employee added successfully');
    }

    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'employee_id' => 'required|unique:employees,employee_id,' . $employee->id,
            'name' => 'required',
            'designation' => 'required',
            'salary' => 'required|numeric',
            'dob' => 'required|date',
            'contact' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('/profile_images'), $name);
            $validated['profile_image'] = $name;

            // Delete old image if exists
            if ($employee->profile_image && file_exists(public_path('profile_images/' . $employee->profile_image))) {
                @unlink(public_path('profile_images/' . $employee->profile_image));
            }
        }

        $employee->update($validated);

        return redirect()->route('admin.employees.index')->with('success', 'Employee updated successfully');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('admin.employees.index')->with('success', 'Employee deleted successfully');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'working_days' => 'required|numeric|min:1|max:31',
        ]);

        \App\Models\Setting::updateOrCreate(
            ['key' => 'monthly_working_days'],
            ['value' => $request->working_days]
        );

        return back()->with('success', 'Monthly working days updated successfully');
    }

    public function salaryReport()
    {
        $employees = Employee::all();
        $workingDaysCount = \App\Models\Setting::where('key', 'monthly_working_days')->first()?->value ?? 22;
        return view('admin.employees.salary_report', compact('employees', 'workingDaysCount'));
    }
}
