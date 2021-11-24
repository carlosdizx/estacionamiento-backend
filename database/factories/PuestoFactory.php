<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PuestoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'inicio' => $this->faker->dateTime($max = 'now', $timezone = null),
            'propietario' => '',
            'placa' => '1',
 
        ];
    }
}
