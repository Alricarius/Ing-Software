import React from 'react'
import imagen1 from '../assets/images/asus rog strix scar II.jpg'
import '../assets/css/item.css'
class  Item extends React.Component{

        render(){
            return(
                <React.Fragment>
                    <div className="card mx-auto Item-Card">
                         <div className="card-body">
                              
                                
                                     <a title="Producto 01" href="C:\Users\HP\Desktop\ingenieria de software\pagina web\index.html"><img src={imagen1} width= "250px" height= "250px" className="float-rigth" alt="Baner 01"/></a>
                                            <h5>Asus Rog Strix Scar II</h5>
                                            <h6>Precio: 1200$</h6>
                                        <a href="www.google.com" class="btn btn-primary" role="button">Ver</a>
                                 
                                
                                
                            
                       </div>

                    </div>
            </React.Fragment>)
        }
            
}

export default Item;