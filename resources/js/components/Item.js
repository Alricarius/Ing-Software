import React from 'react'
import ReactDOM from 'react-dom';
import imagen1 from './asus rog strix scar II.jpg'
import './item.css'
class  Item extends React.Component{

        constructor(props){
            super(props)

            this.state = {
                img: [],
                name: "",
                precio: 0.0,
                error: null
            }
        }

        // async componentDidMount(){
        //     try{
        //         let res = await fetch()
        //         let data = await res.json()
        //     }catch(error){

        //     }
        // }

        render(){
            return(
                <React.Fragment>
                    <div className="card mx-auto Item-Card">
                        <div className="card-body">
                            <img src={imagen1} width= "250px" height= "250px" className="float-rigth" alt="Baner 01"/>
                            <h5>{this.name}</h5>
                            <h6>Precio: {this.state.precio}$</h6>
                            <a href="www.google.com" class="btn btn-primary" role="button">Ver</a>
                            
                       </div>

                    </div>
            </React.Fragment>)
        }
            
}

export default Item;

ReactDOM.render(<Item />, document.getElementById('item'))