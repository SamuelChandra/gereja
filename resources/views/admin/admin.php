<?php
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

// Create an admin
$admin = Admin::create([
    'username' => 'admin1',
    'password' => Hash::make('password123'),
]);

// Assign roles
$roles = Role::whereIn('role_name', ['admin_jemaat', 'admin_umkm'])->get();
$admin->roles()->attach($roles);