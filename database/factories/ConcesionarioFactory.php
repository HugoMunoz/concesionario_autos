<?php

namespace Database\Factories;

use App\Models\Concesionario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Concesionario>
 */
class ConcesionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ciudades = ['Bogotá', 'Medellín', 'Cali', 'Barranquilla', 'Cartagena', 'Santa Marta', 'Bucaramanga', 'Cúcuta'];

        return [
            'nombre' => fake()->company() . ' Motors',
            'ubicacion' => fake()->address(),
            'ciudad' => fake()->randomElement($ciudades),
        ];
    }
}
