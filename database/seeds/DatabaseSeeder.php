<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DifficultySeeder::class,
            UserSeeder::class,
            RecipeSeeder::class
        ]);
    }
}
