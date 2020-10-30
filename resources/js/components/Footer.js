import React from 'react';
import ReactDOM from 'react-dom'
import './css/Heafoo.css'

class Footer extends React.Component{
    render(){
        return(
            <React.Fragment>
                <footer className="footer">
                    <p>Direccion: Calle Heroes del Chaco #1336 Zona Sarco<br/>
                    Telefono: 4454654<br/>
                    Cochabamba - Bolivia
                    </p>
                </footer>
            </React.Fragment>
        );
    }
}

export default Footer;

if(document.getElementById('footer_comp')){
    ReactDOM.render(<Footer/>,document.getElementById('footer_comp'));
}