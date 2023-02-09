<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /* "username" => "Admin",
            "email" => $this->faker->unique()->safeEmail(),
            "user_role" => "Admin",
            "user_role_id" => 1,
            "password" => Hash::make("Password"),
            "email_verified_at" => now(),
            "remember_token" => Str::random(10)*/

            "username" => $this->faker->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "user_role" => "Employee",
            "user_role_id" => 2,
            "password" => Hash::make("Password"),
            "email_verified_at" => now(),
            "remember_token" => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}