<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'user_id' => 4,
            'remind' => fake()->dateTimeBetween('-2 weeks', '+2 weeks'),
            'repeat' => fake()->numberBetween(0,3),
            'status' => fake()->numberBetween(0,1),
            'important' => fake()->numberBetween(0,1),
            'created_at' => fake()->dateTimeInInterval(now()->subDays(30)),
            'updated_at' =>  fake()->dateTimeInInterval(now()->subDays(30)),
            'note' => fake()->sentence()
        ];
    }
}
