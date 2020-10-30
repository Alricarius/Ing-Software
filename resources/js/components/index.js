import React from 'react';
import ReactDOM from 'react-dom';
import MiApp from './miFormulario'
import './css/estilos.css'

class Form extends React.Component{
    render(){
        return(<React.Fragment>
            <h2>Aqui empieza formulario</h2>
              <MiApp/>
              <h2>Aqui termina formulario</h2>
          </React.Fragment>);
    }
}

export default Form;

if(document.getElementById('form')){
    ReactDOM.render(<Form/>, document.getElementById('form'));
}