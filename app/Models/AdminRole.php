<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AdminRole extends Model // Change class name to PascalCase
{
    use HasFactory;

    protected $table = 'admin_role';
    protected $fillable = ['role_name'];

    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(Admin::class, 'admin_assigned_role', 'role_id', 'admin_id');
    }
}
