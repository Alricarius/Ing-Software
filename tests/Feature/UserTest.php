<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
   public Function testUserRegistry()
   {
       $data = [
           'nom_user' => 'Raul carlos',
           'ape_user' => 'Lopez Quispe',
           'carnet_user' => 7777777,
           'dep_user' => 'Cochabamba',
           'email_user' => 'alucard@gmail.com',
           'pass_user' => 'alucard',
           'pregunta' => 'nombre del primer perro',
           'respuesta' => 'rodolfo',
           'cel_user' => 12345678,
       ];

       $request = $this->json('POST','api/Registro', $data);
       $request->assertStatus(201);
       $request->assertRedirect('http://compumundo.test/Ingresar');
       unset($data['pass_user']);
       $this->assertDatabaseHas('user', $data);
   }
    
}
