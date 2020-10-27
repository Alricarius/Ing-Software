
import logo from './assets/images/logo.svg';

import './assets/css/App.css';

import 'bootstrap/dist/css/bootstrap.min.css';
//importar componentes


import Micomponente from './components/Micomponente';
import Item from './components/Item'


function HolaMundo(nombre, edad){

      var presentacion = 
        <div>
          <h2>Hola, soy {nombre}</h2>
          <h3>Tengo {edad} años</h3>
        </div>;
  return presentacion;

}

function App() {
  var nombre = "carlos cardenas";
  
  
  return (
    <div className="App">
      
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Hola, bienvenido al curso de react!!
        </p>
        
        {HolaMundo(nombre,25)}
        
        <section className="componentes">
</section>
        <Micomponente />
        <div class="container">
                  <div class ="row">
                    <div class="col-12 col-sm-4 text-center" > 
                     
                      <Item />
                      <br/>
                    </div>
                    <div class="col-12 col-sm-4 text-center" >
                      <Item />
                      <br/>
                    </div>
                    <div class="col-12 col-sm-4 text-center" >
                      <Item />
                    </div>
                    <div class="col-12 col-sm-4 text-center" >
                      <Item />
                    </div>
                    <div class="col-12 col-sm-4 text-center" >
                      <Item />
                    </div>
                    <div class="col-12 col-sm-4 text-center" >
                      <Item />
                    </div>
            </div>
        </div>
      
        
      </header>
      
    </div>
  );
}

export default App;
