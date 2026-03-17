<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Employee;

class NotificationController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $notifications = Notification::with('employee')->orderBy('created_at', 'desc')->get();
        return view('admin.notifications.index', compact('employees', 'notifications'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'nullable|exists:employees,id',
            'title' => 'required',
            'message' => 'required',
        ]);

        Notification::create($validated);

        return back()->with('success', 'Notification sent successfully');
    }
}
