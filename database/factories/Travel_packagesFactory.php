<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel_packages>
 */
class Travel_packagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'location' => Str::random(10),
            'about' => Str::random(25),
            'price' => fake()->randomNumber(),
            'departure_date' => fake()->date(),
            'duration' => fake()->time(),
        ];
    }
}
