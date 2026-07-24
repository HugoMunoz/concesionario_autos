<?php

namespace Database\Factories;

use App\Models\Asesor;
use App\Models\Concesionario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Asesor>
 */
class AsesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nombre' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'celular' => fake()->phoneNumber(),
            // Selecciona un concesionario aleatorio existente
            'concesionario_id' => Concesionario::inRandomOrder()->first()->id ?? Concesionario::factory(),


            /*'nombre' => fake()->firstName() . ' ' . fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'celular' => fake()->phoneNumber,
            'concesionario_id' => Concesionario::inRandomOrder()->first()->id ?? Concesionario::factory()->create()->id,*/
        ];
    }
}
