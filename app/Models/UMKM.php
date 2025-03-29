<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    use HasFactory;

    protected $table = 'umkm'; // Nama tabel yang digunakan

    protected $fillable = [
        'nama_umkm',
        'gambar_umkm',
        'lokasi_umkm',
        'deskripsi_umkm',
        'jemaat_id',
    ];

    /**
     * Relasi ke model Jemaat (UMKM dimiliki oleh satu Jemaat).
     */
    public function jemaat()
    {
        return $this->belongsTo(Jemaat::class, 'jemaat_id');
    }
}
