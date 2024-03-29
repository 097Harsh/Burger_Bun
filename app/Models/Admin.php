<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admins';
    /*
    protected $fillable = [
        'name',
        'email',
        'password',
        // Add other fields as needed
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    */
}
