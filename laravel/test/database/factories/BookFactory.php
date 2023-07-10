<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'isbn' => fake()->unique()->isbn13(),
            'price' => fake()->numberBetween(100, 1000),
            'available' =>fake()->numberBetween(0, 10)
            // 'name' => Str::random(10),
            // 'author' => Str::random(10),
            // 'isbn' => random_int(10001, 999999),
            // 'quantity' => random_int(10, 100),
            // 'price' => random_int(1, 100)
        ];
    }
}
