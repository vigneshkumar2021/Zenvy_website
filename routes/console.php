<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('attendance:manage-daily', function () {
    $today = \Carbon\Carbon::now('Asia/Kolkata')->toDateString();

    // 1. Auto Checkout for those who missed it
    // Rule: Set to 7:00 PM (19:00:00)
    \App\Models\Attendance::where('date', $today)
        ->whereNotNull('login_time')
        ->whereNull('logout_time')
        ->update(['logout_time' => '19:00:00']);

    $this->info('Auto-checkout completed for ' . $today);

    // 2. Mark Leave for those who didn't check in
    $allEmployeeIds = \App\Models\Employee::pluck('id');
    $checkedInEmployeeIds = \App\Models\Attendance::where('date', $today)
        ->pluck('employee_id');

    $absentEmployeeIds = $allEmployeeIds->diff($checkedInEmployeeIds);

    foreach ($absentEmployeeIds as $employeeId) {
        \App\Models\Attendance::create([
            'employee_id' => $employeeId,
            'date' => $today,
            'status' => 'On Leave',
            'login_time' => null,
            'logout_time' => null
        ]);
    }

    $this->info('Leave marked for ' . $absentEmployeeIds->count() . ' employees.');
})->purpose('Auto-checkout missing records and mark absences as leave')->dailyAt('20:00');

Artisan::command('inspire', function () {
    $this->comment(\Illuminate\Foundation\Inspiring::quote());
})->purpose('Display an inspiring quote');
