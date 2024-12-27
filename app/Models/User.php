<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Employee;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    // protected $fillable = [
    //     'name',
    //     'user_type',
    //     'email',
    //     'password',
    //     'updated_at',
    //     'created_at'
    // ];


    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function employee(){

        return $this->hasMany(Employee::Class);
    }

    public function contract(){
        return $this->hasMany(Contract::class);
    }

    public function report(){
        return $this->hasMany(Report::class);
    }

    public function crmInteraction(){
        return $this->hasMany(CrmInteraction::class);
    }

    public function project(){
        return $this->hasMany(Project::class);
    }
}
