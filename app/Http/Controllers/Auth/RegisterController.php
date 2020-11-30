<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        
        $this->saveRegisterDataSession($request);
            
        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

    protected function saveRegisterDataSession(Request $request){
        $email = $request->email;
        $data = DB::table('users')->select(array('id','name','tipo_user'))->where('email',$email)->first();
        $id = $data->id;
        $name = $request->name;
        $type_user = $data->tipo_user;
        session(['id' => $id]);
        session(['name' => $name]);
        session(['type_user' => $type_user]);
    }

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
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users', 'min:1'],
            'password' => ['required', 'string', 'min:7','max:20'],
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
            'name' => $data['name'],
            'ape_user' => $data['ape_user'],
            'carnet_user' => $data['carnet_user'],
            'dep_user' => $data['dep_user'],
            'email' => $data['email'],
            'pregunta' => $data['pregunta'],
            'respuesta' => $data['respuesta'],
            'cel_user' => $data['cel_user'],
            'password' => Hash::make($data['password']),
            'tipo_user' => 0,
        ]);
    }
}
