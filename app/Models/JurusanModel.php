<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';

    protected $fillable = [
        'jurusan',
        'ukt',
    ];

    // Jika Anda memiliki relasi dengan tabel lain, Anda dapat mendefinisikannya di sini
}
