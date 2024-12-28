<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function stockMovement(){
        return $this->hasMany(StockMovement::class);
    }

    public function task(){
        return $this->hasMany(Task::class);
    }

    public function invoice(){
        return $this->hasMany(Invoice::class);
    }

    public function contract(){
        return $this->hasOne(Contract::class);
    }
}
