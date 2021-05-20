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
        // return [
        //     'idBusqueda'=>$this->faker->numberBetween($min=1,$max=100),
        //     'fecha'=>$this->faker->dateTimeBetween($startDate='-5 years',$endDate='now',$timezone=null),
        //     'apellido'=>$this->faker->lastName(),
        //     'nombre'=>$this->faker->firstName()
        // ];
        return [
            'idBusqueda'=>$this->faker->numberBetween($min=1,$max=70),
            'fecha'=>$this->faker->randomElement(['2018-04-10', '2018-04-24', '2018-04-12', '2018-03-06', '2018-04-20', '2018-04-22', '2018-03-02', '2018-04-17', '2018-03-04', '2018-03-06', '2018-03-14', '2018-03-26']),
            'apellido'=>$this->faker->randomElement([ 'Capunta', 'Nito del Bosque', 'Tilla', 'Menta', 'Bailo', 'Mesa', 'Bronca', 'Pere', 'Ponte Alegre','Del Campo', 'Tupido', 'Lomata Feliz']),
            'nombre'=>$this->faker->randomElement(['Elsa', 'Elena', 'Aitor', 'Aitor', 'Aquiles', 'Zoila', 'Armando', 'Gil', 'Ramona', 'Flor', 'Hess', 'Jose'])
        ];
    }
}
