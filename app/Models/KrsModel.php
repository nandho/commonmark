<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $table = 'krs';

    protected $fillable = [
        'gelombang',
        'periode_mulai',
        'periode_berakhir',
        'semester',
        'status',
    ];
}
