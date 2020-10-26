<?php

namespace Database\Factories;

use App\Models\imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

class imagenFactory extends Factory
{

    protected $model = imagen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_img' => imagen::factory()->faker->numberBetween($min = 5, $max =100),
            'img' => null, 
            'fk_prod' => imagen::factory()->faker->randomDigitNotNull,
        ];
    }
}
