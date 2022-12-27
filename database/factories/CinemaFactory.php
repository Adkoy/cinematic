<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CinemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->streetName(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
