<?php

namespace Database\Factories;

use App\Models\Rubro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RubroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rubro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // manera de utilizar faker que nos otorga laravel y llamar a apellidos random
        // return [
        //     'descripcion'=>$this->faker->lastName()
        // ];
        return[
            'descripcion'=>$this->faker->randomElement(['Informatica','Medicina','Abogacia','Peluqueria','Ingenieria','Plomeria'])
        ];
    }
}
