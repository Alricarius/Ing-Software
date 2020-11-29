import React from 'react';
import ReactDOM from 'react-dom'
import Search from './Search'
import './css/Heafoo.css'

class Header extends React.Component{

    logged(){
        if(user_is_logged){
            if(user_is_admin === "1"){
                return(
                    <div>
                        <div style={{color: 'yellow'}}>(A)</div>
                        <div style={{color: 'green'}}>{user_name+" "+user_id}</div>
                    </div>
                );
            }else{
                return(
                    <div>
                        <div style={{color: 'green'}}>{user_name+" "+user_id}</div>
                    </div>
                );
            }
        }
    }

    render(){
        return (
            <React.Fragment>
                <header className= "header">
                    <div className="container logo-nav-container">
                        <a href="/" className="logo">MegaComputer</a>
                            <div>{this.logged()}</div>
                            <nav className="navegacion">
                            <ul>
                            <li><a href="Novedades">Novedades</a></li>
                            <li><a href="http://127.0.0.1:8000/login">login</a></li>
                            <li><a href="Contactenos">Contactenos</a></li>
                            <li><a href ={server + "/Registro"}>Registrar Producto</a></li>
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