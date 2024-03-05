<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'image' => 'https://via.placeholder.com/150',
            'name' => 'Sport',
        ]);

        Categorie::create([
            'image' => 'https://via.placeholder.com/150',
            'name' => 'Musique',
        ]);

        Categorie::create([
            'image' => 'https://via.placeholder.com/150',
            'name' => 'Cinéma',
        ]);


        Categorie::create([
            'image' => 'https://via.placeholder.com/150',
            'name' => 'Théâtre',
        ]);
        
    }
}
