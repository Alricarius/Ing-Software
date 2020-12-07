<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'admin',
            'ape_user' => 'admin',
            'carnet_user' => 7777777,
            'dep_user' => 'Cochabamba',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567'),
            'pregunta' => 'nombre del primer perro',
            'respuesta' => 'admin',
            'cel_user' => 12345678,
            'tipo_user' => 1,
          
        ]);
        DB::table('users')->insert([
            'name' => 'admin2',
            'ape_user' => 'admin2',
            'carnet_user' => 7777777,
            'dep_user' => 'Cochabamba',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('1234567'),
            'pregunta' => 'nombre del primer perro',
            'respuesta' => 'admin2',
            'cel_user' => 12345678,
            'tipo_user' => 1,
          
        ]);
    }
}
