<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password', 'role','image','phone','address'
=======
        'name', 'email', 'password', 'role', 'img',
>>>>>>> fitur-tertinggal
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
}
=======
}

>>>>>>> fitur-tertinggal
