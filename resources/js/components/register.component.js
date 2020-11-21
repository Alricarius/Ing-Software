import React, { Component } from 'react';
import { Form, Input, Label, FormGroup, FormFeedback, Button } from 'reactstrap';
import "./css/registro.css"
import ReactDOM from 'react-dom';

class Register extends Component {

    constructor(props) {
        super(props);

        this.state ={
            Nombre: '',
            Apellidos: '',
            Cedula_De_Identidad: '',
            Departamento: '',
            Celular: '',
            Correo_Electronico: '',
            Contraseña: '',
            confirmar_Contraseña: '',
            Pregunta_Secreta: '',
            Respuesta: '',
        }     
    }
    handleChange  (e)  {
        this.setState({
            data: {
                ...this.state.data,
                [e.target.name]: e.target.value
            },
            errors: {
                ...this.state.errors,
                [e.target.name]: ''
            }
        });
    }
    validate(){
        const { data } = this.state;
        let errors = {};

        if (data.Nombre === '') errors.Nombre = 'Nombre no puede estar en blanco.';
        if (data.Apellidos === '') errors.Apellidos = 'Apellidos no puede estar en blanco.';
       // if (!isEmail(data.email)) errors.email = 'Email must be valid.';
        if (data.email === '') errors.email = 'Email no puede estar en blanco.';
        if (data.Contraseña === '') errors.Contraseña = 'Contraseña must be valid.';
        if (data.confirmarContraseña !== data.Contraseña) errors.confirmarContraseña = 'Passwords must match.';

        return errors;
    }

    handleSubmit (e) {
        e.preventDefault();

        const { data } = this.state;

        const errors = this.validate();

        if (Object.keys(errors).length === 0) {
            console.log(data);
            this.setState(this.getInitialState());
        } else {
            this.setState({ errors });
        }
    }

    render() {
        //const { data, errors } = this.state;
        return (
            <Form onSubmit={this.handleSubmit}>
                <FormGroup>
                    <Label for="Nombre">Nombre</Label>
                    <Input id="Nombre" /*value={data.Nombre} invalid={errors.Nombre ? true : false}*/ name="Nombre" onChange={this.handleChange} placeholder="escribe tu nombre" />
                    <FormFeedback>{/*errors.Nombre*/}</FormFeedback>
                </FormGroup>

                <FormGroup>
                    <Label for="Apellidos">Apellidos</Label>
                    <Input id="Apellidos" /*value={data.Apellidos} invalid={errors.Apellidos ? true : false}*/ name="Apellidos" onChange={this.handleChange} placeholder="escribe tus dos apellidos"/>
                    <FormFeedback>{/*errors.Apellidos*/}</FormFeedback>
                </FormGroup>

                <FormGroup>
                    <Label for="Cedula_De_Identidad">Cedula De Identidad</Label>
                    <Input id="Cedula_De_Identidad" /*value={data.Cedula_De_Identidad}*/ type="Cedula_De_Identidad" name="Cedula_De_Identidad" /*invalid={errors.Contraseña ? true : false}*/ onChange={this.handleChange} placeholder="escribe tu carnet de identidad"/>
                    <FormFeedback>{/*errors.Cedula_De_Identidad*/}</FormFeedback>
                </FormGroup>

                <FormGroup>
                    <Label for="Selecciona tu Departamento">Departamento</Label>
                    <br />
                     <select name="departamento" id = "departamento">
                        <option value ="Cochabamba" selcted>Cochabamba</option>
                        <option value ="Santa Cruz" selcted>Santa Cruz</option>
                        <option value ="Oruro" selcted>Oruro</option>
                        <option value ="La Paz" selcted>La Paz</option>
                        <option value ="Beni" selcted>Beni</option>
                        <option value ="Pando" selcted>Pando</option>
                        <option value ="Tarija" selcted>Tarija</option>
                        <option value ="Sucre" selcted>Sucre</option>
                        <option value ="Chuquisaca" selcted>Chuquisaca</option>
                        </select>                    
                </FormGroup>

                <FormGroup>
                    <Label for="Celular">Celular</Label>
                    <Input id="Celular" /*value={data.Celular} invalid={errors.Celular ? true : false}*/ name="Celular" onChange={this.handleChange} placeholder="escribe tu numero de celular" />
                    <FormFeedback>{/*errors.Celular*/}</FormFeedback>
                </FormGroup>

                <FormGroup>
                    <Label for="Correo_Electronico">Correo Electronico</Label>
                    <Input id="Correo_Electronico" /*value={data.Correo_Electronico} invalid={errors.Correo_Electronico ? true : false}*/ name="Correo_Electronico" onChange={this.handleChange} placeholder="escribe tu correo electronico" />
                    <FormFeedback>{/*errors.Correo_Electronico*/}</FormFeedback>
                </FormGroup>

                <FormGroup>
                    <Label for="Contraseña">Contraseña</Label>
                    <Input id="Contraseña" /*value={data.Contraseña}*/ type="Contraseña" name="Contraseña" /*invalid={errors.Contraseña ? true : false}*/ onChange={this.handleChange} placeholder="escribe tu contraseña"/>
                    <FormFeedback>{/*errors.Contraseña*/}</FormFeedback>
                </FormGroup>

                <FormGroup>
                    <Label for="confirmarContraseña">confirmar Contraseña</Label>
                    <Input id="confirmarContraseña"/* value={data.confirmPassword}*/ type="Contraseña" name="confirmarContraseña" /*invalid={errors.confirmPassword ? true : false}*/ onChange={this.handleChange} placeholder="confirma tu contraseña" />
                    <FormFeedback>{/*errors.confirmarContraseña*/}</FormFeedback>
                </FormGroup>

                <FormGroup>
                    <Label for="Pregunta_Secreta">Pregunta Secreta</Label>
                    <br />
                     <select name="Pregunta_Secreta" id = "Pregunta_Secreta">
                        <option value ="Nombre de tu primera mascota?" selcted>Nombre de tu primera mascota?</option>
                        <option value ="Marca de Tenis preferida?" selcted>Marca de Tenis preferida?</option>
                        <option value ="Deporte preferido?" selcted>Deporte preferido?</option>
                        </select>
                </FormGroup>

                <FormGroup>
                    <Label for="Respuesta">Respuesta</Label>
                    <Input id="Respuesta" /*value={data.Respuesta}*/ type="Respuesta" name="Respuesta" /*invalid={errors.Respuesta ? true : false}*/ onChange={this.handleChange} />
                    <FormFeedback>{/* errors.Respuesta */}</FormFeedback>
                </FormGroup>

                <Button color="primary">Registrar</Button>

                <Button color="primary">Cancelar</Button>
            </Form>
        );
    }
}

export default Register;
if(document.getElementById("registro"))
   {ReactDOM.render(<Register/>,document.getElementById("registro") )}
     