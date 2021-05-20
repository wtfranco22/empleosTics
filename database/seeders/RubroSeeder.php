<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rubro::factory(50)->create();
    }
}
