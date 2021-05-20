<?php

namespace Database\Factories;

use App\Models\Inscripcion;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscripcionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inscripcion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idBusqueda'=>$this->faker->numberBetween($min=1,$max=100),
            'fecha'=>$this->faker->dateTimeBetween($startDate='-5 years',$endDate='now',$timezone=null),
            'apellido'=>$this->faker->lastName(),
            'nombre'=>$this->faker->firstName()
        ];
    }
}
