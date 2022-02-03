<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TekstopisacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'broj_pesama'  => $this->faker->numberBetween($min = 1, $max = 500),
        ];
    }
}
