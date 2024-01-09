<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'stock' => $this->faker->numberBetween(0, 100),
            'price' => $this->faker->numberBetween(1000, 100000),
            'category' => $this->faker->randomElement(['food', 'drink', 'snack']),
            'image' => $this->faker->imageUrl(640, 480, 'food'),
        ];
    }
}
