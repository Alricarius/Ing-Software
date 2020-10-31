import React from 'react';
import ReactDOM from 'react-dom'
import Search from './Search'
import './css/Heafoo.css'

class Header extends React.Component{

    render(){
        return (
            <React.Fragment>
                <header className= "header">
                    <div className="container logo-nav-container">
                        <a href="/" className="logo">MegaComputer</a>
                            <nav className="navegacion">
                            <ul>
                            <li><a href="Novedades">Novedades</a></li>
                            <li><a href="Asesoria">Asesoria</a></li>
                            <li><a href="Contactenos">Contactenos</a></li>
                            <li><a href ="http://127.0.0.1:8000/Registro">Registrar Producto</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </React.Fragment>
        );
    }
}

export default Header;

if(document.getElementById('header_comp')){
    ReactDOM.render(<Header/>,document.getElementById('header_comp'));
}