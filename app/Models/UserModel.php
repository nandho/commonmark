<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username',
        'password',
        'email',
        'role',
        'token',
    ];

    protected $hidden = [
        'password', // Jangan tampilkan password saat model di-convert ke array atau JSON
        'token',    // Jangan tampilkan token saat model di-convert ke array atau JSON
    ];
}
