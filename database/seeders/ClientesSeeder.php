<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            ['rut'=>'12345678-9','nombre'=>'Daniel'],
            ['rut'=>'22345666-2','nombre'=>'Judith'],
        ]);
    }
}
