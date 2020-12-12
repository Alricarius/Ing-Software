@extends('layouts.inicioLayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus maxLength= "50" >

                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ 'El correo electrónico o contraseña son incorrectos' }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" maxLength = "15">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" Style = "display: none;">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" Style= " color: white; border: 1px;" >
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('register'))                                
                                    <a class="btn btn-link" href="{{ route('register') }}" Style = "color: white;">{{ __('Regístrate') }}</a>
                                @endif                              
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" Style = "color: white; display: none;">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
//Verificacion de longitud de email    
    var correoE;
    let valNom;
    function iniciar(){
        valNom = false;
        correoE = document.getElementById("email");
        correoE.addEventListener("input",validacion);
        correoE.addEventListener("keypress",impMsg);
    }

    function validacion(){
        if(correoE.value.length == 50){
            valNom = true;
            //alert("si entra a el if");
        }else{
            //alert("si entra a else");
            correoE.setCustomValidity("");
            valNom = false;
        }
    }

    function impMsg(){
        if(valNom){
            //alert("si entra a impmsg");
            correoE.setCustomValidity("La dirección de correo electrónico excede los 50 caracteres.");
            correoE.reportValidity();
            //correoE.focus();
            //correoE.value = "";   
        }
    }
    window.addEventListener("load", iniciar);
    
//Verificacion de longitud de password
    var pass1;
    let valNom1;
    function iniciar1(){
        valNom1 = false;
        pass1 = document.getElementById("password");
        pass1.addEventListener("input",validacion1);
        pass1.addEventListener("keypress",impMsg1);
    }

    function validacion1(){
        if(pass1.value.length == 15){
            valNom1 = true;
            //alert("si entra a el if");
        }else{
            //alert("si entra a else");
            pass1.setCustomValidity("");
            valNom1 = false;
        }
    }

    function impMsg1(){
        if(valNom1){
            //alert("si entra a impmsg");
            pass1.setCustomValidity("La contraseña excede los 15 caracteres permitidos.");
            pass1.reportValidity();
            //correoE.focus();
            //correoE.value = "";   
        }
    }
    window.addEventListener("load", iniciar1);

   }
</script>
@endsection
