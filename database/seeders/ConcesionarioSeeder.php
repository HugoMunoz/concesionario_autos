<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConcesionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Concesionario::factory(30)->create();
    }
}
