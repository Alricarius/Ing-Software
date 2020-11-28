<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Util\Xml\ValidationResult;
use App\Models\User;

class UserController extends Controller
{
    public function insertUser(Request $request)
    {
        $user = New User();

        $password = ''.password_hash($request->pass_user, PASSWORD_DEFAULT);

        $user->nom_user = $request->nom_user;
        $user->ape_user = $request->ape_user;
        $user->carnet_user = $request->carnet_user;
        $user->dep_user = $request->dep_user;
        $user->pregunta = $request->pregunta;
        $user->respuesta = $request->respuesta;
        $user->cel_user = $request->cel_user;
        $user->email_user = $request->email_user;
        $user->pass_user = $password;
        $user->tipo_user = 0; 

        $user->save();

        return redirect('/Ingresar', 201);
    }
}
?>
