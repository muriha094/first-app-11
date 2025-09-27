<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();    
        Category::create([
            'name' => 'Mindset',
            'slug' => 'mindset',
            'color' => 'green'

        ]);
        
         Category::create([
            'name' => 'Journey',
            'slug' => 'journey',
            'color' => 'yellow'

        ]);

         Category::create([
            'name' => 'Creativity',
            'slug' => 'creativity',
            'color' => 'red'

        ]);

        Category::create([
            'name' => 'Knowledge',
            'slug' => 'knowledge',
            'color' => 'purple'

        ]);

         Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle',
            'color' => 'pink'

        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'tech',
            'color' => 'blue'

        ]);
    }
}
