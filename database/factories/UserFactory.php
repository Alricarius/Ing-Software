<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_user' => $this->faker->text($maxNbChars = 50),
            'email_user' => $this->faker->unique()->safeEmail,
            'pass_user' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ape_user' => $this->faker->text($maxNbChars = 50),
            'telf_user'=> $this->faker->phoneNumber(),
            'cel_user' => $this->faker->phoneNumber(),
            'dep_user' => $this->faker->text($maxNbChars = 50), 
            'prov_user' => $this->faker->text($maxNbChars = 50),
            'dir_user' => $this->faker->text($maxNbChars = 50),
            'tipo_user' => $this->faker->text($maxNbChars = 20),
            'carnet_user' => $this->faker->numberBetween($min = 9, $max = 10),
        ];
    }
}
