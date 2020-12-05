import React from 'react';
import ReactDOM from 'react-dom'
import Search from './Search'
import './css/Heafoo.css'

class Header extends React.Component{

    user_session(){
        if(user_is_logged){
            if(user_is_admin === "1"){
                return(
                    <div>
                        <label style={{color: 'yellow',marginRight: '0.5rem'}}>(A)</label>
                        <label className="usr">{user_name}</label>
                    </div>
                );
            }else{
                return(
                    <div>
                        <label className="usr">{user_name}</label>
                    </div>
                );
            }
        }
    }

    dropdown_buttons(){
        let btn_login = <li style={{display: 'block'}}><a href={server+"/login"}>Iniciar Sesion</a></li>;
        let btn_register = <li style={{display: 'block'}}><a href={server+"/register"}>Regístrate</a></li>;
        let btn_logout = <li style={{display: 'block'}}><a href={server+"/logout"}>Salir</a></li>;
        let btn_prod_register = <li style={{display: 'block'}}><a href={server+"/RegistroProducto"}>Registrar Producto</a></li>;
        let btn_add_admin = <li style={{display: 'block'}}><a href="#">Agregar Administrador</a></li>;
        if(user_is_logged){
            if(user_is_admin === "1"){
                return (<ul>
                            {btn_prod_register}
                            {btn_logout}
                        </ul>);
            }else {
                return (<ul>
                            {btn_logout}
                        </ul>);
            }
        }else{
            return (<ul>
                        {btn_login}
                        {btn_register}
                    </ul>);
        }
    }

    render(){
        return (
            <React.Fragment>
                <header className= "header">
                    <div className="container logo-nav-container">
                        <a href="/" className="logo">MegaComputer</a>
                        <br/>
                        {this.user_session()}
                        <ul className="navegacion">
                            {/*<li><a href="Novedades">Novedades</a></li>
                            <li><a href="Asesoria">Asesoria</a></li>
                            <li><a href="Contactenos">Contactenos</a></li>*/}
                            <li><a>Cuenta</a>
                                {this.dropdown_buttons()}
                            </li>	
                        </ul> 
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
