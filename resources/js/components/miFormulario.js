import React from 'react'
import './css/estilos.css'
import './css/Heafoo.css'

/*function previewFile() {
    var preview = document.querySelector('img');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();
  
    reader.onloadend = function () {
      preview.src = reader.result;
    }
  
    if (file && validarImagen) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
}
*/
function validarImagen(){ 
    var fileName = document.getElementById("img_subida").value; 
    var idxDot = fileName.lastIndexOf(".") + 1; 
    var extFile = fileName.substr(idxDot, fileName.length).toLowerCase(); 
    if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){ 
        var preview = document.querySelector('img');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();
      
        reader.onloadend = function () {
          preview.src = reader.result;
        }
      
        if (file) {
          reader.readAsDataURL(file);
        } else {
          preview.src = "";
        }
    }else{ 
        alert("Solo se permite formatos .jpg, .png y jpeg");
        document.getElementById("img_subida").value = null;
        document.getElementById("imagenCont").src = null; 
    }
}

//validacion para el campo nombre
var campoNombre;
function iniciar(){
    campoNombre = document.getElementById("cmpNombre");
    campoNombre.addEventListener("input",validacion);
    validacion();
}

function validacion(){
    if(campoNombre.value.length > 50){
        campoNombre.setCustomValidity("Maximo 50 caracteres");

    }else{
        campoNombre.setCustomValidity("");
    }
}
window.addEventListener("load", iniciar);
///

//validacion para el campo descripcion fisica
var campoDesc1;
function iniciar1(){
    campoDesc1 = document.getElementById("desc1");
    campoDesc1.addEventListener("input",validacion1);
    validacion1();
}

function validacion1(){
    if(campoDesc1.value.length > 1000){
        campoDesc1.setCustomValidity("Maximo 1000 caracteres");

    }else{
        campoDesc1.setCustomValidity("");
    }
}
window.addEventListener("load", iniciar1);
///

//validacion del campo caracteristicas
var campoDesc2;
function iniciar2(){
    campoDesc2 = document.getElementById("desc2");
    campoDesc2.addEventListener("input",validacion2);
    validacion2();
}

function validacion2(){
    if(campoDesc2.value.length > 1000){
        campoDesc2.setCustomValidity("Maximo 1000 caracteres");

    }else{
        campoDesc2.setCustomValidity("");
    }
}
window.addEventListener("load", iniciar2);
///

const MiApp = () => (    
    <div className="heafoo">
        <center>
        <form id="form1" action="api/producto" method="POST" encType="multipart/form-data">
            <table cellSpacing="40px" cellPadding="40px">
                <tbody>
                    <tr>
                        <td>
                        
                            <div>
                                <label htmlFor="cmpNombre">Nombre del Producto:</label>
                                <input type="text" id="cmpNombre" name="nom" maxLength= "51" placeholder="Ingrese el nombre del producto..." required/>
                            </div>
                            <div>
                                <label><strong>Tipo de Producto:</strong></label>
                                <select id="tipo_P" name="tipo" >
                                    <option value="componente" selected>Componente</option>
                                    <option value="computadora">Computadora</option>
                                    <option value="accesorio">Accesorio</option>
                                    <option value="otros">Otros</option>
                                </select>
                            </div>
                            <div>
                                <label><strong>Cantidad:</strong> </label>
                                <input type= "number" id= "cant" name="cant" min="1" max="200" size="3" maxLength= "4" required/>
                            </div>
                            <div>
                                <label htmlFor="desc1"><strong>Descripcion Fisica del Producto:</strong> </label>
                                <br/>
                                <textarea id="desc1" name="desc" placeholder="Ingrese una descripcion del producto..." required>
                                </textarea>
                            </div>
                            <div>
                                <label htmlFor="desc2"><strong>Caracteristicas Tecnicas del Producto:</strong> </label>
                                <br/>
                                <textarea id="desc2" name="carac" placeholder="Ingrese las Caracteristicas del Producto: " required>
                                </textarea>
                            </div>
                        </td>
                        <td>   
                            
                            <div id="cmpPrecio" style= {{marginBottom:'70px'}}>
                                <label><strong>Precio: </strong></label>
                                <input type="number" name="precio" id="precio_P" min="1" max="100000" placeholder="Precio" required/>
                            </div>
                            <div id= "contenedor_img">
                                <img src="/images/default.png"id="imagenCont" width="500" height="300" alt="Insert image here"/>
                            </div>

                        
                            <center>
                                <label htmlFor="img_subida">Cargar Imagen</label>
                                <input type="file" name="img" id="img_subida" onChange={validarImagen} accept=".jpg,.png,.jpeg" multiple required/>
                            </center>
                            <br/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <label htmlFor="btmRegistrar">Registrar Producto</label>
                <input type= "submit" value= "Registrar" id="btmRegistrar"/>
            </div>

        </form>
        </center>
    </div>         
    );

export default MiApp;

//<script src="./componentes/miFormIMG.js"></script>

/* */