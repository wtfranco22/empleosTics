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
        $personas=[];
        $personas[]=['nombre'=>'Elsa','apellido'=>'Capunta'];
        $personas[]=['nombre'=>'Elena','apellido'=>'Nito del Bosque'];
        $personas[]=['nombre'=>'Aitor','apellido'=>'Tilla'];
        $personas[]=['nombre'=>'Aitor','apellido'=>'Menta'];
        $personas[]=['nombre'=>'Aquiles','apellido'=>'Bailo'];
        $personas[]=['nombre'=>'Zoila','apellido'=>'Mesa'];
        $personas[]=['nombre'=>'Armando','apellido'=>'Bronca'];
        $personas[]=['nombre'=>'Pere','apellido'=>'Gil'];
        $personas[]=['nombre'=>'Ramona','apellido'=>'Ponte Alegra'];
        $personas[]=['nombre'=>'Flor','apellido'=>'Del Campo'];
        $personas[]=['nombre'=>'Hess','apellido'=>'Tupido'];
        $personas[]=['nombre'=>'Jose','apellido'=>'Lomata Feliz'];
        $indice = $this->faker->numberBetween($min=0,$max=10);
        return [
            'idBusqueda'=>$this->faker->numberBetween($min=1,$max=70),
            'fecha'=>$this->faker->randomElement(['2018-04-10', '2018-04-24', '2018-04-12', '2018-03-06', '2018-04-20', '2018-04-22', '2018-03-02', '2018-04-17', '2018-03-04', '2018-03-06', '2018-03-14', '2018-03-26']),
            'nombre'=>$personas[$indice]['nombre'],
            'apellido'=>$personas[$indice]['apellido']
        ];
    }
}
