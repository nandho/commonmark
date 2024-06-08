<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisiModel extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = [
        'id',
        'divisi'
    ] ;

    public $timestamps = false;

    protected $table = 'divisi';
    protected $primarykey = 'id';
    protected $keyType = 'string';
    public $incrementing = 'false';
}
