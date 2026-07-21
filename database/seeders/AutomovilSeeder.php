<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Automovil;
use App\Models\Concesionario;

class AutomovilSeeder extends Seeder
{
    public function run(): void
    {
        $concesionarios = Concesionario::all();

        // Crear automóviles asignando un concesionario aleatorio
        Automovil::factory(30)->create([
            'concesionario_id' => $concesionarios->random()->id,
        ]);
    }
}
