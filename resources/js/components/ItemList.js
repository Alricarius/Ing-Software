import React from 'react'
import ReactDOM from 'react-dom'
import Item from './Item'
import './css/list.css'

class ItemList extends React.Component{

    
    constructor(props){
        super(props);

        this.state = {
            data_prod: [],
            error: null
        };
    }

    async componentDidMount(){
        try {
            let res = await fetch(server+"/api/productos");
            let data = await res.json();
            console.log(data[0].img);
            this.setState({
                data_prod: data
            });
            console.log(this.state.data_prod[0]);
        } catch (error) {
            error;
        }
    }

    render(){
        const listItems = this.state.data_prod.map((prod) =>  <li key={prod.id_prod}><Item
                                                                    prod_id = {prod.id_prod}
                                                                    prod_img={prod.img}
                                                                    prod_name={prod.nom_prod}
                                                                    prod_price={prod.precio_prod}
                                                                    /></li>);
        return(
            <ul className="list">
                {listItems}
            </ul>
        );
    }

}

export default ItemList;

if(document.getElementById('item')){
    ReactDOM.render(<ItemList/>, document.getElementById('item'));
}
