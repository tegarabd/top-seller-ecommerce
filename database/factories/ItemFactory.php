<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "item_name" => $this->faker->realTextBetween(5, 25),
            "brand_id" => $this->faker->numberBetween(1, 10),
            "category_id" => $this->faker->numberBetween(1, 4),
            "price" => $this->faker->numberBetween(100, 1000) * 1000,
            "description" => $this->faker->realTextBetween(25, 100),
        ];
    }
}
