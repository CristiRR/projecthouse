<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */

class UserFactory extends Factory
{
    /**
     * Define the models default state.
     * 
     *  @return array<string,mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'username'=>fake()->unique()->userName,
            'email'=>fake()->unique()->safeEmail(),
            'password'=> Hash::make('password'),
        ];
    }
}
