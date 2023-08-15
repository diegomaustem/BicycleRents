<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BicycleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->name(),
            'color' => $this->faker->colorName(),
            'model' => $this->faker->name(),
            'hoop'  => $this->faker->boolean(),
            'march' => $this->faker->biasedNumberBetween()
        ];
    }
}
