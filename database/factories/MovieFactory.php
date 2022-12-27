<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'director' => $this->faker->name(),
            'year' => $this->faker->name(),
            'duration_by_min' => Str::random(1).rand(1,24),
        ];
    }
}
