<?php

namespace Database\Factories;

use App\Models\Tekstopisac;
use App\Models\Pevac;
use Illuminate\Database\Eloquent\Factories\Factory;

class PesmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->word(),
            'godina' => $this->faker->numberBetween($min = 1965, $max = 2022),
            'pevac_id' => Pevac::factory(),
            'tekstopisac_id' => Tekstopisac::factory()
        ];
    }
}
