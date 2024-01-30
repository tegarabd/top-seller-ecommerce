<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "brand_name" => $this->faker->realTextBetween(5, 25),
            "top5_flag" => $this->faker->boolean(),
            "description" => $this->faker->realTextBetween(25, 100),
        ];
    }
}
