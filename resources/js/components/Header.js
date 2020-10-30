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
                        <a href="imagen" className="logo">MegaComputer</a>
                            <nav className="navegacion">
                            <ul>
                            <li><a href="#">Novedades</a></li>
                            <li><a href="#">Asesoria</a></li>
                            <li><a href="#">Contactenos</a></li>
                            <Search/>
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