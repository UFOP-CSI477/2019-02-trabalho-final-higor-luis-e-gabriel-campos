import React, { Component } from 'react';
import Buttons from '../base _components/Buttons';
import FormField from '../form _components/FormField';
import Title from '../base _components/Title';
import ReactTable from 'react-table';
import "react-table/react-table.css";


class CustomPage extends Component {
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

class CustomTable extends Component {
    constructor(props) {
        super(props);
        this.state = {
            headers: this.props.headers,
            link: this.props.link,
            data: [
                {
                    Nome: "Miguel Francisco de Assis",
                    Pai: "Pedro",
                    Mãe: "Ana"
                }
            ],
            columns:  this.props.headers.map(element=>{
                return {
                    Header: element,
                    accessor: element
                }
            }),
            noDataText: "Nenhum resultado foi encontrado",
            showConfirmationPopup: false,
            success: false,
            failure: false,
            delete: false,
            deletionTarget: []
        };
        console.log(this.state.columns);
    }

    // delete(value) {
    //     this.setState({
    //         showConfirmationPopup: true,
    //         deletionTarget: value
    //     });
    //     console.log(value);
    // }

	/*confirmDeletion() {
		$.ajax({
			url: "http://localhost:8080/sbrp-service/rest/aluno/deletar/" + this.state.deletionTarget[0],
			contentType: 'application/json',
			dataType: 'json',
			type: 'delete',
			headers: {
				'Username': sessionStorage.getItem('SBRP_Email'),
				'Authorization': sessionStorage.getItem('SBRP_Token')
			},
			success: function (response) {
				this.setState({
					showConfirmationPopup: false,
					deletionTarget: [] ,
					success: true
				});
				console.log(response);
			}.bind(this),
			error: function (response) {
				this.setState({
					showConfirmationPopup: false,
					deletionTarget: [] ,
					failure: true
				});
				console.log(response);
			}.bind(this)
		}
		);
	}*/

    // cancelDeletion() {
    //     this.setState({
    //         showConfirmationPopup: false,
    //         deletionTarget: []
    //     });
    // }

    // successFunction() {
    //     PubSub.publish("updateRequest", null);
    //     this.setState({ success: false });
    // }

    // confirmDeletion() {
    //     console.log("ue");
    //     var array = [];
    //     console.log(deletion(this.state.deletionTarget, this.state.showConfirmationPopup, this.state.success, this.state.failure));
    //     this.setState({
    //         deletionTarget: array[0],
    //         showConfirmationPopup: array[1],
    //         sucess: array[2],
    //         failure: array[3]
    //     });
    // }

    render() {
        return (
            <div className="box-footer">
                {/* {
                    this.state.showConfirmationPopup &&
                    <WarningBox message={"Você tem certeza de que quer excluir o aluno " + this.state.deletionTarget[1] + "?"} continue={this.confirmDeletion.bind(this)} cancel={this.cancelDeletion.bind(this)} />
                }
                {this.state.success ?
                    <SuccessBox message="Aluno excluido com sucesso" action={e => this.successFunction()} />
                    : null
                }{this.state.failure ?
                    <FailureBox message="Não foi possivel excluir o aluno" />
                    : null
                } */}
                <ReactTable
                    data={this.state.data}
                    noDataText={this.state.noDataText}
                    columns={this.state.columns}
                    defaultPageSize={10}
                    className="-striped -highlight"
                />
            </div>
        );
    }
}
export default class CustomBox extends Component {

    constructor(props){
        super(props)
        console.log(this.props.headers)
    }

    render() {
        return (
            <section className="content">
                <div className="box">
                    <CustomPage
                        forms={this.props.forms} 
                        title={this.props.title}
                        icon={this.props.icon}
                        route={this.props.route}
                    />
                    <CustomTable headers={this.props.headers} link={this.props.route+'/alterar'}/>
                </div>
            </section>
        );
    }
}