<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusExtra extends Model
{
    use HasFactory;

    protected $table = 'status_extra';

    protected $fillable = [
        'nama_status_extra',
        'yatim_piatu',
        'disabilitas',
    ];

    // Define the relationship with Jemaat
    public function jemaats()
    {
        // return $this->hasMany(Jemaat::class, 'status_extra_id');
        return $this->hasOne(Jemaat::class);
    }
}