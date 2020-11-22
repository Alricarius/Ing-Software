import React from 'react'
import ReactDOM from 'react-dom'
import './css/item.css'
class  Items extends React.Component{

    constructor(props){
        super(props)
        this.state = 
                    {
            //aqui tiene que llegar los datos de la bd
                        data:[
                                {
                                    "id":1,
                                    "prod_name": "intel core I9",
                                    "prod_price": "1200",
                                    "prod_img":"https://ejemplo"
                                },{
                                    "id":2,
                                    "prod_name": "Tarjeta Grafica ",
                                    "prod_price": "600",
                                    "prod_img":"https://ejemplo"
                                }
                            ]
                    }
    }    //en caso de pedir el id, llamar {Item.id}

        render(){
            const {prod_name,prod_price,prod_image,id}= this.props;
            return(
                <React.Fragment>
                    {this.state.data.map((Item)=>{
                        return(

                            <div className="card mx-auto Item-Card">
                                <div className="card-body">
                                    <img src={Item.prod_img} width= "250px" height= "250px" className="float-rigth" alt="Baner 01"/>
                                    <h5>{Item.prod_name}</h5>
                                    <h6>Precio: {Item.prod_price}$</h6>
                                    <a href="" className="btn btn-primary" role="button">Ver</a>
                            
                                </div>
                            </div>
                        )
                    }
                )
            }
            </React.Fragment>);
        }
            
}

export default Items;

if(document.getElementById('items')){
    ReactDOM.render(<Items/>, document.getElementById('items'));
}