import React from 'react'
import ReactDOM from 'react-dom'
import './css/estilos.css'

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

const MiApp = () => (    
    <div>
        <div className="heafoo">
            <header className= "header">
		    <div className="container logo-nav-container">
			    <a href="imagen" className="logo">MegaComputer</a>
				    <nav className="navegacion">
					<ul>
					<li><a href="#">Novedades</a></li>
					 <li><a href="#">Asesoria</a></li>
					<li><a href="#">Contactenos</a></li>
                    
					</ul>
                 </nav>
		    </div>
	        </header>

            <div id="titulo">
                Registro De Un Producto
            </div>
       </div>
        
        <div className=".table_div">
            <form id="form1" action="api/producto" method="POST" encType="multipart/form-data">
                <table>
                    <tbody className=".table_data">
                        <tr>
                            <td>
                            
                                <div>
                                    <label htmlFor="cmpNombre"><strong>Nombre del Producto: </strong></label>
                                    <input type="text" id="cmpNombre" name="nom" pattern="[A-Za-z0-9\s]{1,50}" maxLength= "51" placeholder="Ingrese el nombre del producto..." required/>
                                </div>
                                <div>
                                    <label><strong>Tipo de Producto:</strong></label>
                                    <select id="tipo_P" name="tipo">
                                        <option></option>
                                        <option value="componente">Componente</option>
                                        <option value="computadora">Computadora</option>
                                        <option value="accesorio">Accesorio</option>
                                        <option value="otros">Otros</option>
                                    </select>
                                </div>
                                <div>
                                    <label><strong>Cantidad:</strong> </label>
                                    <input type= "number" id= "cant" min="1" max="1000" required/>
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
                                <div id="cmpPrecio">
                                    <label><strong>Precio: </strong></label>
                                    <input type="number" name="precio" id="precio_P" min="1" max="100000" placeholder="Precio en BS" required/>
                                </div>
                            
                                <div id= "contenedor_img">
                                        <img src="..."id="imagenCont" width="500" height="300"/>
                                </div>

                                <label htmlFor="img_subida">Cargar Imagen</label>
                                <input type="file" name="img" id="img_subida" onChange={validarImagen} accept=".jpg,.png,.jpeg" multiple required/>
                            
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
        </div>
        

        <div className="heafoo">
            <footer className="footer">
            <p>Direccion: Calle Heroes del Chaco #1336 Zona Sarco<br/>
            Telefono: 4454654<br/>
            Cochabamba - Bolivia
            </p>
            </footer>  
        </div>
           
    </div>              
    );

export default MiApp;

//<script src="./componentes/miFormIMG.js"></script>

/* */