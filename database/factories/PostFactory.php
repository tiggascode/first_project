<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->sentence(100),
            'image' => $this->faker->imageUrl(),
            'likes' => random_int(1,2000),
            'is_published' => 1,
            'category_id' => Category::get()->random()->id,
        ];
    }
}
