<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => fake()->text(),
            'meta_description' => fake()->text(),
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'thumbnail' => fake()->text(),
            'content' => fake()->paragraphs(3, true),
            'published_at' => fake()->dateTime(),
        ];
    }
}
