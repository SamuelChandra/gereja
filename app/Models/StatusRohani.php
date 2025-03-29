<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusRohani extends Model
{
    use HasFactory;

    protected $table = 'status_rohani';

    protected $fillable = [
        // 'nama_status',
        'status_baptis',
        'tanggal_baptis',
        'gereja_baptis',
        'status_sidi',
        'tanggal_sidi',
        'gereja_sidi',
        'status_nikah',
        'tanggal_nikah',
        'gereja_nikah',
    ];

    // Define the relationship with Jemaat
    public function jemaat()
    {
         return $this->belongsTo(Jemaat::class);
        //return $this->hasOne(Jemaat::class);
    }
}