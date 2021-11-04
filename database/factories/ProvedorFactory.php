<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Provedor;

class ProvedorFactory extends Factory
{
   /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provedor::class;

   
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_Empresa'=>$this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'telefono_Empresa'=>$this->faker->phoneNumber,
            'direccion_empresa'=>$this->faker->address
        ];
    }
}
