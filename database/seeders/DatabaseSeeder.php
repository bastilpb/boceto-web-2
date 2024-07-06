<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run()
    {
        $this->call([
            TiposSeeder::class,
            PerfilesSeeder::class,
            UsuariosSeeder::class,
            VehiculosSeeder::class,
            ClientesSeeder::class,
            ArriendosSeeder::class,
        ]);

    }
    
}
