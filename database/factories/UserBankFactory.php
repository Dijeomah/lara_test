<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserBankFactory extends Factory
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
            'bank_name' => $this->faker->randomElement([
                        'First Bank',
                        'Access Bank',
                        'Fidelity Bank',
                        'Zenith Bank',]),
            'account_no' => $this->faker->unique()->numerify('##########'),
            'account_name' => $this->faker->unique()->name(),
        ];
    }
}