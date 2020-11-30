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
           'name' => 'Raul carlos',
           'ape_user' => 'Lopez Quispe',
           'carnet_user' => 7777777,
           'dep_user' => 'Cochabamba',
           'email' => 'alucard@gmail.com',
           'password' => 'Alucards1',
           'pregunta' => 'nombre del primer perro',
           'respuesta' => 'rodolfo',
           'cel_user' => 12345678,
       ];

       $request = $this->json('POST',route('register'), $data);
       $request->assertStatus(201);
       //$request->assertRedirect(route('login'));
       unset($data['password']);
       $this->assertDatabaseHas('users', $data);
   }
    
   public function testUserLogin()
   {
        $data1 = [
            'name' => 'Raul carlos',
            'ape_user' => 'Lopez Quispe',
            'carnet_user' => 7777777,
            'dep_user' => 'Cochabamba',
            'email' => 'alucard671@gmail.com',
            'password' => 'alucard671',
            'pregunta' => 'nombre del primer perro',
            'respuesta' => 'rodolfo',
            'cel_user' => 12345678,
        ];

        $request = $this->json('POST',route('register'), $data1);

        $data = 
        [
            'email' => 'alucard671@gmail.com',
            'password' => 'alucard671',  
            'remember' => false,  
        ];

        $request = $this->json('POST', route('login'), $data);
        $request->assertStatus(302);
        $request->assertRedirect(route('inicio'));

        $data['email'] = 'alucard@gmail.com';
        $request = $this->json('POST', route('login'), $data);
        $request->assertStatus(302);
        //$request->assertRedirect('/login');


   }
}
