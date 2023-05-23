<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * 
     * @var string
     * 
     */
    
    protected $table = 'users';

    /**
     * @var array
     */

    protected $fillable=[
        'email',
        'password',
        'piva',
        'user_name',
        'type',
        'firstname',
        'lastname',
        'address',
        'city',
        'phone',
        'ragsoc',
        'cap',
        'codfisc',
        'image'
    ];
}
