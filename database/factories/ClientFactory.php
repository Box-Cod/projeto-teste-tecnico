<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'cpf' => $this->faker->unique()->word,
            'cnpj' => $this->faker->unique()->word,
            'phone' => $this->faker->word,
            'email' => $this->faker->unique()->word,
        ];
    }
}
