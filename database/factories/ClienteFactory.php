<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
   /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

   
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [


            'nombre_Del_Cliente'=>$this->faker->name,
            'primer_Apellido'=>$this->faker->lastname,
            'segundo_Apellido'=>$this->faker->lastname,
            'direccion'=>$this->faker->address,
            'edad'=>$this->faker->numberbetween(13, 100),
            'compra'=>$this->faker->sentence($nbWords =10, $variableNbWords = true)
   

        ];
         
    }
}
