import React, { Component } from 'react';
import Buttons from '../base _components/Buttons';
import FormField from '../form _components/FormField';
import Title from '../base _components/Title';
export default class CustomPage extends Component {
    constructor(props) {
        super(props);
        console.log(this.props)
        var field={};
        this.props.forms.map(element=>{
            field[element.field] = ""
        })
        this.state = {
            ...field
        };
        console.log(this.state)
    }

    componentDidMount() {
        console.log("montado");
    }

    changeField(fieldName, event) {
        var field = []
        field[fieldName] = event.target.value;
        this.setState(field);
        console.log(this.state)
    }

    updateTable(event) {
        console.log("Fui chamado!");
    }

    clearFields() {
        var field = []
        this.props.forms.map(element=>{
            field[element.field] = ""
        })
        this.setState({
            ...field
        })
    }
    render() {

        return (
            <section className="content">
                <div className="box">
                    <Title title={this.props.title} icon={this.props.icon} />
                    <div className="box-body">
                        <form action="" method="post" onSubmit={this.updateTable}>
                            <div>
                                {
                                    this.props.forms.map((element,index)=>{
                                        return <FormField  key={index} label={element.label} type={element.type} name={element.name} id={element.field} value={this.state[element.field]} onChange={this.changeField.bind(this, element.field)} classes={element.colConfig} />
                                    })
                                }

                                {/* <FormField label={"Matricula"} type="text" name="enrollment" id="enrollment" value={this.state.enrollmentNumber} onChange={this.changeField.bind(this, 'enrollmentNumber')} classes="col-md-2" />
                                <FormField label={"Nome"} type="text" name="name" id="name" value={this.state.name} onChange={this.changeField.bind(this, 'name')} classes="col-md-10" /> */}
                                
                                {/* <FormField label={"Telefone"} mask="(99) 9999-9999" type="text" name="telephone" id="telephone" value={this.state.telephone} onChange={this.changeField.bind(this, 'telephone')} classes={"col-md-2"} /> */}
                                {/* <FormField label={"Celular"} mask="(99) 9 9999-9999" type="text" name="phone" id="phone" value={this.state.phone} onChange={this.changeField.bind(this, 'phone')} classes={"col-md-2"} /> */}

                                <Buttons route={this.props.route+'/registrar'} submit={this.updateTable.bind(this)} clear={this.clearFields.bind(this)} />
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        );
    }
}