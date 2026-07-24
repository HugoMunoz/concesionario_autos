<?php

namespace Database\Factories;

use App\Models\Compra;
use App\Models\Cliente;
use App\Models\Asesor;
use App\Models\Automovil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Compra>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => fake()->dateTimeBetween('-1 year', 'now'),
            'valor' => fake()->numberBetween(15000000, 100000000),
            'cliente_id' => Cliente::inRandomOrder()->first()->id,
            'asesor_id' => Asesor::inRandomOrder()->first()->id,
            'automovil_id' => Automovil::inRandomOrder()->first()->id,

            /*'cliente_id' => Cliente::factory(),
            'asesor_id' => Asesor::factory(),
            'automovil_id' => Automovil::factory(),*/
        ];
    }
}
