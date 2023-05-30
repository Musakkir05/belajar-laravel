<?php

namespace Database\Factories;

use faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = faker::create();
        return [
            'nama' => $faker->name(),
            'stambuk' => mt_rand(13020190000, 13020199999),
            'gender' => arr::random(['L', 'P']),
            'class_id' => Arr::random([1, 2, 3]),
        ];
    }
}
