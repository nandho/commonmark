<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class JadwalUjian extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jadwal_ujians';

    protected $timestamp = 'false';
}
