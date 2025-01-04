<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'rfid_tag',
        'position',
        'department',
        'hourly_rate',
    ];
    
    public function attendance(){
        return $this->hasMany(Attendance::class);
    }

    public function task(){
        return $this->hasMany(Task::class);
    }

    public function payroll(){
        return $this->hasMany(Payroll::class);
    }
}
