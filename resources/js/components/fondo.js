import React from 'react';
import ReactDOM from 'react-dom'
import Background from '../components/images/fondo.jpg'
import './css/fondo.css'


class Fondo extends React.Component{
    render(){
            return (
                <div className = "fondoxd">
                    
                </div>
            )
    }


}
export default Fondo;
if(document.getElementById('fondo')){
    ReactDOM.render(<Fondo/>, document.getElementById('fondo'));
}
