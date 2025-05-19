<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'General',
        ]);
        Category::create([
            'name' => 'Video Games',
        ]);
        Category::create([
            'name' => 'Xbox',
        ]);
        Category::create([
            'name' => 'Playstation',
        ]);
        Category::create([
            'name' => 'Nintendo',
        ]);
        Category::create([
            'name' => 'Movies',
        ]);
        Category::create([
            'name' => 'Music',
        ]);
        Category::create([
            'name' => 'Books',
        ]);
        Category::create([
            'name' => 'TV Shows',
        ]);
        Category::create([
            'name' => 'Anime',
        ]);
        Category::create([
            'name' => 'Comics',
        ]);
        Category::create([
            'name' => 'Mobile',
        ]);
        Category::create([
            'name' => 'Technology',
        ]);
        Category::create([
            'name' => 'Football',
        ]);
    }
}
