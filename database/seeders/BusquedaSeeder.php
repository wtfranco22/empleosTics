<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusquedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Busqueda::factory(100)->create();
    }
}
