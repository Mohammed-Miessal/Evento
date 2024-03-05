<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        //  $this->call(CategorieSeeder::class);


        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('123'),
          
        ]);

        $user->role()->attach(3);

        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'mohammedmiessal@gmail.com',
            'password' => bcrypt('123'),
          
        ]);

        $user->role()->attach(2);

    }
}
