<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create_user']);
        Permission::create(['name' => 'create_role']);
        Permission::create(['name' => 'create_permission']);
        Permission::create(['name' => 'create_post']);
        Permission::create(['name' => 'create_comment']);
        Permission::create(['name' => 'create_category']);

    }
}
