<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provedor;

class ProvedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provedor::Factory(500)->create();
    }
}
