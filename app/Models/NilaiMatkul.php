<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class NilaiMatkul extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
        'sks',
        'semester',
        'kelas',
        'nilai'
    ];

    protected $casts = [
        'nilai' => 'float'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    /**
     * Kita override getKeyType method
     *
     * Memberi tahu laravel bahwa model ini menggunakan primary key bertipe string
     */
    public function getKeyType()
    {
        return 'string';
    }
}
