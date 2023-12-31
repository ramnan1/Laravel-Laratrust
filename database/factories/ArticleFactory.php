<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'user_id' => mt_rand(1,3),
          'title' => $this->faker->sentence(4),
          'body' => $this->faker->paragraph(2),
          'published' => mt_rand(0,1)
        ];
    }
}
