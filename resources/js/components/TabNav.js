import React, { useState } from 'react'
import ReactDOM from 'react-dom'
import './css/TabNav.css'

class TabNav extends React.Component{
 
    constructor(props){
        super(props);

        this.state = {
            tabNumb: 0,
            name: "",
            desc: "",
            carac: "",
            price: 0,
            type: "",
            cant: "",
            img: [],
            error: null
        };
        this.click1 = this.click1.bind(this);
        this.click2 = this.click2.bind(this);
        this.click3 = this.click3.bind(this);
        this.showPanel = this.showPanel.bind(this);
        this.showButton = this.showButton.bind(this);
    }

    async componentDidMount(){
        var url = "http://127.0.0.1:8000/api/producto/"+id;
            
        try{
            let res = await fetch(url);
            let data = await res.json();
            this.setState({
                name: data.nom_prod,
                desc: data.desc_prod,
                carac: data.carac_prod,
                price: data.precio_prod,
                type: data.tipo_prod,
                cant: data.cant_prod,
                img: data.upload_imagen
            });
        }catch (error){
            error;
        }
    }

    click1(){
        this.setState({
            tabNumb: 0
        });
    }

    click2(){
        this.setState({
            tabNumb: 1
        });
    }

    click3(){
        this.setState({
            tabNumb: 2
        });
    }

    showPanel(){
        if(this.state.tabNumb === 1){
            return <ul>
                        <li>Nombre: {this.state.name}</li>
                        <li><pre>Características: {this.state.carac}</pre> </li>
                        <li>Tipo: {this.state.type}</li>
                    </ul>;
        }
        if(this.state.tabNumb === 2){
            return <pre>Descripcion: {this.state.desc}</pre>;
        }
        const image = this.state.img.map(function(imge){return imge.img });
        return(
        <center>
            <img src={"/images/"+image[0]} className="image" ></img>
        </center>);
    }

    showButtonSelected(){
        if(this.state.tabNumb === 1){
            return <div className="button_container">
                        <button onClick={this.click1}>Imagen</button>
                        <div className="button_selected">
                        <button onClick={this.click2}>Características</button>                        
                        </div>
                        <button onClick={this.click3}>Descripcion fisica</button>
                    </div>
                    
        }
        if(this.state.tabNumb === 2){
            return <div className="button_container">
            <button onClick={this.click1}>Imagen</button>                                
            <button onClick={this.click2}>Características</button>
            <div className="button_selected">            
            <button onClick={this.click3}>Descripcion fisica</button>            
            </div>
            </div>
        }

        return(
            <div className="button_container">
            <div className="button_selected">
            <button onClick={this.click1}>Imagen</button>          
            </div>
            <button onClick={this.click2}>Características</button>  
            <button onClick={this.click3}>Descripcion fisica</button>           
            </div>
        )
    }

    showButton(){
        if(this.state.cant === 0){
            return  <div className="button_color1">
                        <label>No Disponible</label>
                    </div>
        }
        return <div className="button_color">
                    <label>Disponible</label>
                </div>

    }

    render() {
        
        return (
            <React.Fragment>
                <h1 className="set_stilostitle">
                    Nombre del producto: {this.state.name}
                </h1>

                <div className="set_button">
                    <h2>Precio: {this.state.price} $</h2>
                </div>

                
                    <div className="set_button">
                        {this.showButton()}
                    </div>


                <center>
                    <div className="tab_container">
                        <div>{this.showButtonSelected()}</div>
                        <div className="tab_panel">{this.showPanel()}</div>
                    </div>
                </center>
            </React.Fragment>
        );
    }

}

export default TabNav;

if(document.getElementById('tabnav')){
    ReactDOM.render(<TabNav/>, document.getElementById('tabnav'));
}