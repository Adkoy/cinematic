<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start_time' => $this->faker->time('H:i:m',now()),
            'end_time' => $this->faker->time('H:i:m',now()),
            'date' => $this->faker->dateTime(now(),'IR'),
        ];
    }
}
