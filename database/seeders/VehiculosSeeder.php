<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generar datos de ejemplo
        DB::table('vehiculos')->insert([
            [
                'patente' => 'ABC123',
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'estado' => '0',
                'tipo_id' => 1,
            ],
            [
                'patente' => 'DEF456',
                'marca' => 'Ford',
                'modelo' => 'Escape',
                'estado' => '1',
                'tipo_id' => 2,
            ],
            [
                'patente' => 'GHI789',
                'marca' => 'Chevrolet',
                'modelo' => 'Silverado',
                'estado' => '2',
                'tipo_id' => 3,
            ],
            [
                'patente' => 'JKL012',
                'marca' => 'Ferrari',
                'modelo' => '488 Spider',
                'estado' => '3',
                'tipo_id' => 4,
            ],
            [
                'patente' => 'MNO345',
                'marca' => 'Yamaha',
                'modelo' => 'YZF-R6',
                'estado' => '2',
                'tipo_id' => 5,
            ],
        ]);
    }
}
