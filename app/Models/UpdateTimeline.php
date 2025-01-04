<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateTimeline extends Model
{
    /** @use HasFactory<\Database\Factories\UpdateTimelineFactory> */
    use HasFactory;

    protected $fillable = [
            "user_id",
            'project_id',
            'update_title',
            'update_description',
            'status',
            'progress_percentage',
            'image_path',
            'created_at',
            'upated_at'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
