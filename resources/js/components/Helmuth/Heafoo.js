import React from 'react';
import Search from './Search'
import './Heafoo.css'

function Heafoo(props){
    return(
        <div className="heafoo">
        <header className= "header">
		    <div className="container logo-nav-container">
			    <a href="imagen" className="logo">MegaComputer</a>
				<ul className="navegacion">
					<li><a href="#">Novedades</a></li>
					<li><a href="#">Asesoria</a></li>
					<li><a href="#">Contactenos</a></li>
                    <li><a href="#">Cuenta</a>
						<ul>
						<li><a href="#">Iniciar Sesion</a></li>
						<li><a href="#">Registrate</a></li>
						</ul>
					</li>	
                </ul> 
		    </div>
	   </header>
	   <main className="main">
		<div className="container">
			<p> 
			hola
			</p>
		</div>
	</main>
       <footer className="footer">
		<p className="Nota">Direccion: Calle Heroes del Chaco #1336 Zona Sarco<br/>
		Telefono: 4454654<br/>
		Cochabamba - Bolivia
		</p>
	</footer>
       </div>
    );
}
export default Heafoo;