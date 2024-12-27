<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $guarded = [];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function employee(){
        return $this->belongsToMany(Employee::class);
    }
}
