<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asesor;
use App\Models\Concesionario;

class AsesorSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener todos los concesionarios existentes
        $concesionarios = Concesionario::all();

        // Si no hay concesionarios, crear uno por defecto
        if ($concesionarios->isEmpty()) {
            $concesionario = Concesionario::create([
                'nombre' => 'Concesionario principal',
                'ubicacion' => 'Calle 456',
                'ciudad' => 'Popayán',
            ]);
            $concesionarios = collect([$concesionario]);
        }

        // Crear asesores y asignarles un concesionario aleatorio
        Asesor::factory(30)->create([
            'concesionario_id' => $concesionarios->random()->id,
        ]);
    }
}
