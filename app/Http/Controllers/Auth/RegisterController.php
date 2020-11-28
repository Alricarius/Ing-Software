<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::RAIZ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            /*'nom_user' => ['required', 'string', 'max:50', 'min:1'],
            'ape_user' => ['required', 'string', 'max:50', 'min:1'],
            'carnet_user' => ['required', 'max:8', 'min:4'],
            'cel_user' => ['required', 'max:12', 'min:6'],
            'email_user' => ['required', 'string', 'email', 'max:50', 'unique:user', 'min:1'],
            'pass_user' => ['required', 'string', 'min:7','max:20'],*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom_user' => $data['nom_user'],
            /*'ape_user' => $data['ape_user'],*/
            'carnet_user' => $data['carnet_user'],
            /*'dep_user' => $data['dep_user'],*/
            'email_user' => $data['email_user'],
            /*'pregunta' => $data['pregunta'],*/
            /*'respuesta' => $data['respuesta'],*/
            /*'cel_user' => $data['cel_user'],*/
            'pass_user' => Hash::make($data['pass_user']),
            /*'tipo_user' => 0,*/
        ]);
    }
}
