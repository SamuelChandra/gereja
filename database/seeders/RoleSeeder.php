<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminRole; // Use PascalCase

class RoleSeeder extends Seeder
{
    public function run()
    {
        $admin_roles = ['admin_utama', 'admin_jemaat', 'admin_jadwal', 'admin_umkm', 'admin_multimedia', 'admin_pewartaan'];

        foreach ($admin_roles as $role) {
            AdminRole::create(['role_name' => $role]); // Use PascalCase model reference
        }
    }
}
