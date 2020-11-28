@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="carnet" class="col-md-4 col-form-label text-md-right">{{ __('Carnet') }}</label>

                            <div class="col-md-6">
                                <input id="carnet" type="carnet" class="form-control @error('carnet') is-invalid @enderror" name="carnet" required autocomplete="new-carnet">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>
                            <div class="col-md-6">
                                  <select name="departamento" id = "departamento">
                                         <option value ="Cochabamba" selcted>Cochabamba</option>
                                         <option value ="Santa Cruz" selcted>Santa Cruz</option>
                                         <option value ="Oruro" selcted>Oruro</option>
                                         <option value ="La Paz" selcted>La Paz</option>
                                         <option value ="Beni" selcted>Beni</option>
                                         <option value ="Pando" selcted>Pando</option>
                                         <option value ="Tarija" selcted>Tarija</option>
                                         <option value ="Sucre" selcted>Sucre</option>
                                         <option value ="Chuquisaca" selcted>Chuquisaca</option>
                                         </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                                
                        <div class="form-group row">
                            <label for="pregunta secreta" class="col-md-4 col-form-label text-md-right">{{ __('Pregunta secreta') }}</label>
                            <div class="col-md-6">
                            <select name="Pregunta_Secreta" id = "Pregunta_Secreta">
                                   <option value ="Nombre de tu primera mascota?" selcted>Nombre de tu primera mascota?</option>
                                   <option value ="Marca de Tenis preferida?" selcted>Marca de Tenis preferida?</option>
                                   <option value ="Deporte preferido?" selcted>Deporte preferido?</option>
                                   </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="respuesta" class="col-md-4 col-form-label text-md-right">{{ __('Respuesta') }}</label>

                            <div class="col-md-6">
                                <input id="respuesta" type="text" class="form-control @error('respuesta') is-invalid @enderror" name="respuesta" value="{{ old('respuesta') }}" required autocomplete="respuesta" autofocus>
                            </div>
                        </div>
                            
                            </div>
                        </div>       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id ="btmReg" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                          
                        <div class="form-group row mb-6">
                            <div class="col-md-0 o644ffset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cancelar registro') }}
                                </button>
 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //validacion para el campo nombre
    var nombre;
    function iniciar(){
        nombre = document.getElementById("nombre");
        nombre.addEventListener("input",validacion);
        validacion();
    }

    function validacion(){
        if(nombre.value.length < 3){
            nombre.setCustomValidity("El nombre debe tener un minimo de 3 caracteres");
        }else if(nombre.value.length > 35){
            nombre.setCustomValidity("El nombre debe tener un maximo de 35 caracteres");
        }else{
            nombre.setCustomValidity("");
        }
    }
    window.addEventListener("load", iniciar);


//validacion para el campo apellido
    var apellido;
    function iniciar1(){
        apellido = document.getElementById("apellido");
        apellido.addEventListener("input",validacion1);
        validacion1();
    }

    function validacion1(){
        if(apellido.value.length < 3){
            apellido.setCustomValidity("El apellido debe tener un minimo de 3 caracteres");
        }else if(apellido.value.length > 35){
            apellido.setCustomValidity("El apellido debe tener un maximo de 35 caracteres");
        }else{
            apellido.setCustomValidity("");
        }
    }
    window.addEventListener("load", iniciar1);

//validacion para el campo carnet
    var carnet;
    function iniciar2(){
        carnet = document.getElementById("carnet");
        carnet.addEventListener("input",validacion2);
        validacion2();
    }

    function validacion2(){
        if(carnet.value.length > 9){
            carnet.setCustomValidity("Ingrese un maximo de 9 digitos");
        }else{
            carnet.setCustomValidity("");
        }
    }
    window.addEventListener("load", iniciar2);

    //validacion para el campo celular
    var celular;
    function iniciar3(){
        celular = document.getElementById("celular");
        celular.addEventListener("input",validacion3);
        validacion3();
    }

    function validacion3(){
        if(celular.value.length > 7){
            celular.setCustomValidity("Ingrese un maximo de 7 digitos");
        }else{
            celular.setCustomValidity("");
        }
    }
    window.addEventListener("load", iniciar3);

//validacion para el campo contraseña
    var contraseña;
    function iniciar4(){
        contraseña = document.getElementById("password");
        contraseña.addEventListener("input",validacion4);
        validacion4();
    }

    function validacion4(){
        if(contraseña.value.length < 7){
            contraseña.setCustomValidity("La contraseña debe tener un minimo de 7 digitos");
        }else if(contraseña.value.length > 15){
            contraseña.setCustomValidity("La contraseña debe tener un maximo de 15 caracteres");
        }else{
            contraseña.setCustomValidity("");
        }
    }
    window.addEventListener("load", iniciar4);

//validacion para contraseñas iguales
var botonReg;
var contraseña_conf;
    function iniciar5(){
        contraseña_conf = document.getElementById("password-confirm");
        botonReg = document.getElementById("btmReg");
        contraseña_conf.addEventListener("input",validacion5);
        botonReg.addEventListener("click",validacion5);
        validacion5();
    }

    function validacion5(){
        if(contraseña_conf.value != contraseña.value){
            contraseña_conf.setCustomValidity("Las contraseñas no coinciden");
        }else{
            contraseña_conf.setCustomValidity("");
        }
    }
    window.addEventListener("load", iniciar5); 

    //validacion para el campo de respuesta
    var respuesta;
    function iniciar6(){
        respuesta = document.getElementById("respuesta");
        respuesta.addEventListener("input",validacion6);
        validacion6();
    }

    function validacion6(){
        if(respuesta.value.length < 3){
            respuesta.setCustomValidity("El Campo debe tener un minimo de 3 caracteres");
        }else{
            respuesta.setCustomValidity("");
        }
    }
    window.addEventListener("load", iniciar6);  
</script>
@endsection
