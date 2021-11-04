<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;

class ProductoFactory extends Factory
{
 /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'nombre_Producto'=> $this->faker->word,
            'precio_producto'=> $this->faker->randomFloat($nbMaxDecimals = 2, $min = 100.00, $max = 300.00),
            'total_producto'=> $this->faker->randomFloat($nbMaxDecimals = 2, $min = 100.00, $max = 300.00)
        ];
    }
}
