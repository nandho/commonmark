<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class soal extends Model
{
    use HasFactory;
    protected $table = 'soals';

    protected $fillable = [
       'id ',
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

    protected function foto():Attribute
    {
        return Attribute::make(
            get: function ($image) {
                if ($image) {
                    return asset('/storage/soalfoto/' . $image);
                } else {
                    return null;
                }
            }
        );
    }
}
