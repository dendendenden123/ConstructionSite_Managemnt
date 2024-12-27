<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmInteraction extends Model
{
    /** @use HasFactory<\Database\Factories\CrmInteractionFactory> */
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
