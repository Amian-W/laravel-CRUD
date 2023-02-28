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
    public function definition()
    {
        return [
            'name'=>$this->faker->company(),
            'price'=>$this->faker->randomFloat($nbMaxDecimals = 3, $min = 100, $max = 500),
            'detail'=>$this->faker->sentence($nbWords = 4),

        ];
    }
}
