<?php

namespace Database\Factories;

use App\Models\Automovil;
use App\Models\Concesionario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Automovil>
 */
class AutomovilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $marcas = ['Toyota', 'Honda', 'Ford', 'BMW', 'Mercedes', 'Audi', 'Volkswagen', 'Chevrolet'];
        $marca = fake()->randomElement($marcas);

        return [
            'marca' => $marca,
            'modelo' => fake()->words(2, true),
            'cilindraje' => fake()->numberBetween(1000, 3000),
            'concesionario_id' => Concesionario::inRandomOrder()->first()->id ?? Concesionario::factory()->create()->id,
        ];
    }
}
