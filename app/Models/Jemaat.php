<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    protected $table = 'jemaat';

    protected $fillable = [
        'name',
        'gender',
        'status_in_family',
        'location_of_birth',
        'date_of_birth',
        'blood_group',
        'education',
        'work',
        'ethnicity',
        'address',
        'phone_number',
        'email',
        'status_jemaat', 
    ];

    // Relasi dengan tabel status_rohani
    public function statusRohani()
    {
        return $this->hasOne(StatusRohani::class);
        // return $this->belongsTo(StatusRohani::class, 'status_rohani_id');
    }

    // Relasi dengan tabel status_extra
    public function statusExtra()
    {
        return $this->belongsTo(StatusExtra::class);
        // return $this->belongsTo(StatusExtra::class, 'status_extra_id');
        
    }

    // Relasi dengan tabel jabatan
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
        // return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }

    // Relasi dengan tabel lingkungan
    public function lingkungan()
    {
        return $this->belongsTo(Lingkungan::class);
        // return $this->belongsTo(Lingkungan::class, 'lingkungan_id');
    }

    // 🔹 Relasi dengan tabel UMKM (One-to-Many)
    public function umkm()
    {
        return $this->hasMany(UMKM::class);
    }
}
