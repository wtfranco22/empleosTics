<?php

namespace Database\Factories;

use App\Models\Busqueda;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusquedaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Busqueda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idRubro'=>$this->faker->numberBetween($min=1,$max=50),
            'empresa'=>$this->faker->company(),
            'titulo'=>$this->faker->jobTitle(),
            'descripcion'=>$this->faker->text($maxNbChars=150)
        ];
    }
}
