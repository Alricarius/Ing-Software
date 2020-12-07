@extends('layouts.inicioLayout')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id = "formReg1">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" onblur="pal1()" onkeypress="return sololetras(event)"   onpaste ="return false" maxlength="35" oninput="maxlengthNombre(this);"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="nombre" autofocus>
                                   
                                   <script>
                                      function sololetras(e) {
                                         key =e.keyCode || e.wich;
                                         teclado =String.fromCharCode(key).toLowerCase();
                                         letras =" abcdefghijklmnñopqrstuvwxyz";
                                         especiales=[8-37-38-46-164]; 
                                         teclado_especial = false;
                                         for(var i in especiales){
                                         if (key==especiales[i]) {
                                         teclado_especial = true;break;
                                         break;
                                         }
                                      }
                                        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
                                         return false; 
                                        }
                                      }
                                   </script>
                                   <script>
                                    function maxlengthNombre (obj) {
                                    console.log(obj.value);
                                    if (obj.value.length > obj.maxLength) {
                                    obj.value = obj.value.slice(0, obj.maxLength);        
                                      }  
                                    }
                                </script> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ape_user" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="ape_user" type="text" onkeypress="return sololetrasapellido(event)"   onpaste ="return false" maxlength="35" oninput="maxlengthApellido(this);" class="form-control @error('ape_user') is-invalid @enderror" name="ape_user" value="{{ old('ape_user') }}" required autocomplete="apellido" autofocus>
                                <script>
                                    function sololetrasapellido(e){
                                       key =e.keyCode || e.wich;
                                       teclado =String.fromCharCode(key).toLowerCase();
                                       letras =" abcdefghijklmnñopqrstuvwxyz";
                                       especiales=[8-37-38-46-164]; 
                                       teclado_especial = false;
                                       for(var i in especiales){
                                       if (key==especiales[i]) {
                                       teclado_especial = true;break;
                                       break;
                                       }
                                    }
                                      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
                                       return false; 
                                       }
                                }
                                </script>
                                <script>
                                    function maxlengthApellido (obj) {
                                    console.log(obj.value);
                                    if (obj.value.length > obj.maxLength) {
                                    obj.value = obj.value.slice(0, obj.maxLength);        
                                      }  
                                    }
                                </script> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="carnet_user" class="col-md-4 col-form-label text-md-right">{{ __('Cédula de Identidad') }}</label>

                            <div class="col-md-6">
                                <input id="carnet_user" type="number"  maxlength="9" oninput="maxlengthApellido(this);" class="form-control @error('carnet_user') is-invalid @enderror" name="carnet_user" required autocomplete="new-carnet" autofocus >
                                <style>
                                input[type=number]::-webkit-inner-spin-button, 
                                input[type=number]::-webkit-outer-spin-button { 
                                -webkit-appearance: none; margin: 0;}
                                </style>
                                <script>
                                    function maxlengthCedula (obj) {
                                    console.log(obj.value);
                                    if (obj.value.length > obj.maxLength) {
                                    obj.value = obj.value.slice(0, obj.maxLength);        
                                      }  
                                    }
                                </script>                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dep_user" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>
                            <div class="col-md-6">
                                  <select name="dep_user" id="tipo_P">
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
                            <label for="cel_user" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="cel_user" type="number" maxlength="8" oninput="maxlengthApellido(this);" class="form-control @error('cel_user') is-invalid @enderror" name="cel_user" value="{{ old('cel_user') }}" required autocomplete="celular" autofocus>
                                <script>
                                    function maxlengthApellido (obj) {
                                    console.log(obj.value);
                                    if (obj.value.length > obj.maxLength) {
                                    obj.value = obj.value.slice(0, obj.maxLength);        
                                      }  
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="ejm@gmail.com"   onkeypress="return sololetrasemail(event)"   onpaste ="return false" maxlength="30" oninput="maxlengthContrasena(this);"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                  <script>
                                     function sololetrasemail(e){
                                       key =e.keyCode || e.wich;
                                       teclado =String.fromCharCode(key).toLowerCase();
                                       letras =" abcdefghijklmnñopqrstuvwxyz@.0123456789-_";
                                       especiales=[8-37-38-46-164]; 
                                       teclado_especial = false;
                                       for(var i in especiales){
                                       if (key==especiales[i]) {
                                       teclado_especial = true;break;
                                       break;
                                        }
                                       }
                                        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
                                        return false; 
                                       }
                                     }
                                 </script>
                                 <script>
                                    function maxlengthApellido (obj) {
                                    console.log(obj.value);
                                    if (obj.value.length > obj.maxLength) {
                                    obj.value = obj.value.slice(0, obj.maxLength);        
                                      }  
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" maxlength="15" oninput="maxlengthContrasena(this);class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" maxlength="15" oninput="maxlengthConfirmarContrasena(this); class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <script>
                                    function maxlengthConfrimarContrasena (obj) {
                                    console.log(obj.value);
                                    if (obj.value.length > obj.maxLength) {
                                    obj.value = obj.value.slice(0, obj.maxLength);        
                                      }  
                                    }
                                </script>
                            </div>
                        </div>        
                        <div class="form-group row">
                            <label for="pregunta" class="col-md-4 col-form-label text-md-right">{{ __('Pregunta secreta') }}</label>
                            <div class="col-md-6">
                            <select name="pregunta" id="tipo_P">
                                   <option value ="Nombre de tu primera mascota?" selcted>Nombre de tu primera mascota?</option>
                                   <option value ="Nombre de tu primer amigo(a)?" selcted>Nombre de tu primer amigo(a)?</option>
                                   <option value ="Ciudad donde naciste?" selcted>Ciudad donde naciste?</option>
                                   <option value ="Nombre de la escuela primaria?" selcted>Nombre de la escuela primaria?</option>
                                   </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="respuesta" class="col-md-4 col-form-label text-md-right">{{ __('Respuesta') }}</label>

                            <div class="col-md-6">
                                <input id="respuesta" type="text" class="form-control @error('respuesta') is-invalid @enderror" name="respuesta" value="{{ old('respuesta') }}" onkeypress="return validarTecla(event);" required autocomplete="respuesta" autofocus maxlength="10">
                            </div>
                        </div>
                            
                        <label class="col-md-5 " ></label>
                                <button type="submit" class="btn btn-primary" Style= " color: white; border: 1px;">
                                    {{ __('Regístrate') }}
                                </button>
                            </div>
                        </div>
                         
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
        nombre = document.getElementById("name");
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
        apellido = document.getElementById("ape_user");
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
        carnet = document.getElementById("carnet_user");
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
        celular = document.getElementById("cel_user");
        celular.addEventListener("input",validacion3);
        validacion3();
    }

    function validacion3(){
        if(celular.value.length > 8){
            celular.setCustomValidity("Ingrese un maximo de 8 digitos");
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
            contraseña.setCustomValidity("La contraseña debe tener un minimo de 7 caracteres");
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

    //validar input en el campo respuesta
    function validarTecla(evt){
		var code = (evt.which) ? evt.which : evt.keyCode;
		if(code == 32 || code == 8){ // espacio y borrar
		  return true;
		}else if(code >= 48 && code <= 57){ //numeros.
		  return true;
		}else if(code >= 65 && code <= 90 || code >= 97 && code <= 122) { //letras
		  return true;
		}else{ //otras teclas
		  return false;
		}
    }
    
    //Limpiar los campos del registro
    var correo;
    function limpiarReg(){
        correo = document.getElementById("email");

        nombre.value = "";
        apellido.value = "";
        carnet.value = "";
        celular.value = "";
        respuesta.value = "";
        correo.value = "";
    }
    window.addEventListener("unload", limpiarReg);

    //validar formulario y mostrar alerta
    var formReg
    function impMsgRegistro(){
        formReg = document.getElementById("formReg1");
        formReg.addEventListener("submit",impAlert);
    }

    function impAlert(){
        if(formReg.checkValidity()){
            alert("Se ha registrado correctamente");
        }
    }
    window.addEventListener("load", impMsgRegistro);
    var campoNombre;
    let valNom;
    function iniciar(){
        valNom = false;
        campoNombre = document.getElementById("name");
        campoNombre.addEventListener("input",validacionNombre);
        campoNombre.addEventListener("keypress",impMsg);
        
    }

    function validacionNombre(){
        if(campoNombre.value.length == 35){
            valNom = true;
        }else{
            campoNombre.setCustomValidity("");
            valNom = false;
        }
    }

    function impMsg(){
        if(valNom){
            campoNombre.setCustomValidity("El nombre debe tener un maximo de 35 caracteres");
            campoNombre.reportValidity();   
        }
    }
    function pal1(){
        campoNombre.setCustomValidity("");
    }
</script>
@endsection
