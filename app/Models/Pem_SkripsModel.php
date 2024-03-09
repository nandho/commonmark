<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pem_SkripsModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_dosen',
        'id_mahasiswa',
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