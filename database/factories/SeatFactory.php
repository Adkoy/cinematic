<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => rand(0,2),
            'price' => rand(10,60)*1000,
            'place' => Str::random(1).rand(1,24),
        ];
    }
}
