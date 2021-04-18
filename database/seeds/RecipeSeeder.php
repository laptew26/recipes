<?php

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Recipe::class, 100)->create();
    }
}
