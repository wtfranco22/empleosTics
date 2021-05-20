<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Inscripcion::factory(70)->create();
    }
}
