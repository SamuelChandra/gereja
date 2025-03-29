<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';

    protected $fillable = [
        'nama_jabatan',
        'periode',
    ];

    // Define the relationship with Jemaat
    public function jemaats()
    {
        // return $this->hasMany(Jemaat::class, 'jabatan_id');
        return $this->hasMany(Jemaat::class);
    }
}