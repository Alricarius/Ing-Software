import React, { useState } from 'react'
import ReactDOM from 'react-dom'
import './css/TabNav.css'

class TabNav extends React.Component{
 
    constructor(props){
        super(props);

        this.state = {
            tabNumb: 0
        }
        this.click1 = this.click1.bind(this);
        this.click2 = this.click2.bind(this);
        this.showPanel = this.showPanel.bind(this);
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

    showPanel(){
        if(this.state.tabNumb === 1){
            return <ul>
                        <li>Nombre: </li>
                        <li>Descripcion: </li>
                        <li>Características: </li>
                        <li>Precio: </li>
                        <li>Tipo: </li>
                    </ul>;
        }
        return <h1>Insert image silder component here :v</h1>;
    }

    render() {
        
        return (
            <React.Fragment>
                <div className="tab_container">
                    <div className="button_container">
                        <button onClick={this.click1}>Imagen</button>
                        <button onClick={this.click2}>Características</button>
                    </div>
                    <div className="tab_panel">{this.showPanel()}</div>
                </div>
            </React.Fragment>
        )
    }

}

export default TabNav

ReactDOM.render(<TabNav/>, document.getElementById('tabnav'))