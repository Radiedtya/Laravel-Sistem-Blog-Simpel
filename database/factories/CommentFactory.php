<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Mengambil ID Post secara acak dari yang sudah ada di database
            'post_id' => Post::inRandomOrder()->first()->id ?? Post::factory(),
            // Mengambil ID User secara acak
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'body' => $this->faker->paragraph(rand(1, 2)),
        ];
    }
}
