<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArriendosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generar datos de ejemplo
        DB::table('arriendos')->insert([
            [
                'fecha_inicio' => Carbon::now()->subDays(10),
                'fecha_devolucion' => Carbon::now()->subDays(5),
                'imagen_entrega' => 'entrega1.jpg',
                'imagen_devolucion' => 'devolucion1.jpg',
                'vehiculo_id' => 'vehiculo_1',
                'usuario_email' => 'usuario1@example.com',
            ],
            [
                'fecha_inicio' => Carbon::now()->subDays(8),
                'fecha_devolucion' => Carbon::now()->subDays(3),
                'imagen_entrega' => 'entrega2.jpg',
                'imagen_devolucion' => 'devolucion2.jpg',
                'vehiculo_id' => 'vehiculo_2',
                'usuario_email' => 'usuario2@example.com',
            ],
            [
                'fecha_inicio' => Carbon::now()->subDays(6),
                'fecha_devolucion' => Carbon::now()->subDays(1),
                'imagen_entrega' => 'entrega3.jpg',
                'imagen_devolucion' => 'devolucion3.jpg',
                'vehiculo_id' => 'vehiculo_3',
                'usuario_email' => 'usuario3@example.com',
            ],
        ]);
    }
}
