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
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'green'

        ]);
        
         Category::create([
            'name' => 'Backend Programming',
            'slug' => 'backend-programming',
            'color' => 'yellow'

        ]);

         Category::create([
            'name' => 'Frontend Programming',
            'slug' => 'frontend-programming',
            'color' => 'red'

        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'purple'

        ]);
    }
}
