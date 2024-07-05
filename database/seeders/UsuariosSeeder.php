<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['email'=>'admin@usm.cl','password'=>Hash::make('1234'),'nombre'=>'Bastian','perfil_id'=>1],
            ['email'=>'ejec@usm.cl','password'=>Hash::make('5678'),'nombre'=>'Benjamin','perfil_id'=>2],
        ]);
    }
}
