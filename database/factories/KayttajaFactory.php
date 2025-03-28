<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class KayttajaFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roolit = ['sihteeri','tuomari','paakayttaja'];

        return [
            'nimi' => fake()->name(),
            'tunnus' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'rooli' => Arr::random($roolit),
        ];
    }
}