<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'employee_id',
        'name',
        'designation',
        'salary',
        'dob',
        'contact',
        'email',
        'profile_image',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function calculateMonthlySalary($workingDaysCount)
    {
        $presentDays = $this->attendances()
            ->whereIn('status', ['Present', 'Late'])
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->count();

        if ($workingDaysCount > 0) {
            return ($this->salary / $workingDaysCount) * $presentDays;
        }

        return 0;
    }

    public function calculateYearlySalary($workingDaysCount)
    {
        // For simplicity, we assume the same working days per month for the year so far
        // A more accurate way would be to track monthly settings historical records
        $presentDaysYear = $this->attendances()
            ->whereIn('status', ['Present', 'Late'])
            ->whereYear('date', now()->year)
            ->count();

        // If we assume workingDaysCount is avg/standard for this calculation
        if ($workingDaysCount > 0) {
            return ($this->salary / $workingDaysCount) * $presentDaysYear;
        }

        return 0;
    }
}
