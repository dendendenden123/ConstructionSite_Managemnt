<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    /** @use HasFactory<\Database\Factories\StockMovementFactory> */
    use HasFactory;

    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
