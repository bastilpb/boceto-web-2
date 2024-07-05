<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{

    public function run()
    {
        // Generar datos de ejemplo
        DB::table('tipos')->insert([
            [
                'nombre' => 'Sedán',
                'costo' => 20000,
            ],
            [
                'nombre' => 'SUV',
                'costo' => 30000,
            ],
            [
                'nombre' => 'Camioneta',
                'costo' => 40000,
            ],
            [
                'nombre' => 'Deportivo',
                'costo' => 50000,
            ],
            [
                'nombre' => 'Motocicleta',
                'costo' => 10000,
            ],
        ]);
    }
}
