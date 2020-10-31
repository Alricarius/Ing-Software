import React from 'react';
import ReactDOM from 'react-dom';
import MiApp from './miFormulario'
import './css/estilos.css'

class Form extends React.Component{
    render(){
        return(<React.Fragment>
              <MiApp/>
          </React.Fragment>);
    }
}

export default Form;

if(document.getElementById('form')){
    ReactDOM.render(<Form/>, document.getElementById('form'));
}