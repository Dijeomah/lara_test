<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 11),
            'address' => $this->faker->address(),
            'state' => $this->faker->randomElement([
                        'Lagos State',
                        'Abuja',
                        'Delta State',
                        'River State',]),
            'dob' =>Carbon::now()->subYears(5),
            'gender' => $this->faker->randomElement([
                        'Male',
                        'Female',
                        ]),
            ];
    }
}
