<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lingkungan extends Model
{
    use HasFactory;

    protected $table = 'lingkungan';

    protected $fillable = [
        'nama_lingkungan',
    ];

    // Definisikan relasi dengan Jemaat
    public function jemaats()
    {
        // return $this->hasMany(Jemaat::class, 'lingkungan_id');
        return $this->hasMany(Jemaat::class);
    }

    // Definisikan relasi dengan Rayon
    public function rayons()
    {
        return $this->hasMany(Rayon::class, 'lingkungan_id');
    }
}