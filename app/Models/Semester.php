<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids; // Import trait HasUuids

class Semester extends Model
{
    use HasFactory, HasUuids; // Gunakan trait HasUuids

    protected $table = 'semesters';
    protected $primaryKey = 'id';
    public $incrementing = false; // Nonaktifkan auto-increment
    protected $keyType = 'string'; // Tipe kunci adalah string
    public $timestamps = false;
    
    protected $fillable = [
        'nama_semester',
        'tanggal_mulai',
        'tanggal_selesai',
        'status'
    ];

    public function pendaftarans()
    {
        return $this->hasMany(PmbModel::class, 'semester_id', 'id');
    }

    // Method lain yang diperlukan...
}
