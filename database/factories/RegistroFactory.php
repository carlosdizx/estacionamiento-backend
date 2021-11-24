<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
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
            'fin' => $this->faker->dateTime($max = 'now', $timezone = null),
            'propietario' => $this-> faker->buildingNumber ,
            'placa' => $this-> faker->buildingNumber ,
        ];
    }
}
