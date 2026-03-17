<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'employee_id',
        'date',
        'login_time',
        'logout_time',
        'status',
        'late_count',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
