<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'phone'=> fake()->phoneNumber(),
            'message'=>fake()->text(200),
            'email' => rand(0, 1) ? fake()->safeEmail() : null,
            'received_at'=>fake()->dateTimeBetween('-2 weeks','now')
        ];
    }
}
