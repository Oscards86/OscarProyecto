<?php

namespace Database\Seeders;

use App\Models\cliente;
use App\Models\producto;
use App\Models\provedor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ClienteSeeder::class,
            ProductoSeeder::class,
            ProvedorSeeder::class
        ]);

    }
}
