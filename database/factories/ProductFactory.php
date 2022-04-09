<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(0, 1000),
            'quantity' => $this->faker->numberBetween(0, 400),
            'model_name' => $this->faker->realText(10, 2),
            'description' => $this->faker->realText(200, 2),
        ];
    }
}
