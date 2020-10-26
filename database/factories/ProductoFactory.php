<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
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
            'nom_prod' => $this->faker->text($maxNbChars = 50),
            'desc_prod' => $this->faker->text($maxNbChars = 500),
            'carac_prod'=> $this->faker->text($maxNbChars = 500),
            'precio_prod' => $this->faker->numberBetween($min = 1, $max=10000),
            'tipo_prod' => $this->faker->text($maxnBchars = 20),
            'fecha_prod' => Now(),
            'cant_prod' => 0,
        ];
    }
}
