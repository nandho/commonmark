<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class soal extends Model
{
    use HasFactory;
    protected $table = 'soals';

    protected $fillable = [
       'soal',
       'pilihan1',
       'pilihan2',
       'pilihan3',
       'pilihan4',
       'foto',
       'kunci_jawaban',
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

    public function getPhotoUrlAttribute()
    {
        // Ambil nama file foto dari atribut 'photo'
        $photoName = $this->attributes['foto'];

        // Jika foto tidak kosong
        if ($photoName) {
            // Ganti 'storage_path' dengan lokasi penyimpanan foto di proyek Laravel Anda
            return asset('storage/soalfoto/' . $photoName);
        }

        // Jika foto kosong, return null atau URL default sesuai kebutuhan Anda
        return null;
    }
}
