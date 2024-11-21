<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Recipe;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(['email' => 'a@admin.com']);
        User::factory(29)->create();
        Category::factory(15)->create();
        Tag::factory(50)->create();
        Recipe::factory(count: 150)->create();

        $recipes = Recipe::all();
        $tags = Tag::all();

        foreach ($recipes as $recipe)
        {
            $recipe->tags()->attach($tags->random(rand(2,4)));
        }
    }
}
