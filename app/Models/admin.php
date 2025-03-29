<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(admin_role::class, 'admin_assigned_role', 'admin_id', 'role_id');
    }
}
