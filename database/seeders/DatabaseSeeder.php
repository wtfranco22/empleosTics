<?php

namespace Database\Seeders;

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
        $this->call(RubroSeeder::class);
        $this->call(BusquedaSeeder::class);
        $this->call(InscripcionSeeder::class);
    }
}
