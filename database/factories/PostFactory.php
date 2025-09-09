<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'title' => $this->faker->sentence(6),
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug($this->faker->sentence(6)),
            'body' => $this->faker->paragraphs(5, true), // true agar menjadi string
        ];
    }
}
