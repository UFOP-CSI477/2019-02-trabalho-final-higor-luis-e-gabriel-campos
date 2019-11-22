import React, { Component } from 'react';
import { Checkbox } from 'react-ui-icheck';
import Buttons from '../base _components/Buttons';
import FormField from '../form _components/FormField';
import Title from '../base _components/Title';
export default class StudentBox extends Component {
    constructor() {
        super();
        this.state = {
            enrollmentNumber: '',
            enrollment: {
                id: '',
                school: '',
                year: '',
                education_type: '',
                school_grade: '',
                turn: '',
                use_transportation: '',
                way_transportation: '',
                has_validated_by_EasyAppointment: '',
                version: '',

            },
            student_address: {

            },
            name: '',

            //reduced mobility
            mobility: false,
            //special vehicle
            vehicle: false,
            telephone: '',
            cellphone: '',
            birthday: '',
            //exclude
            active: true,
            turn: undefined,
            schoolCode: undefined,
            school: '',
            direction: undefined,
            // active: true,
            outlier: undefined,
            noAddr: false,
            showSearch: false
        };
        this.sendForm = this.updateTable.bind(this);
    }

    componentDidMount() {
        console.log("montado");
    }

    changeField(fieldName, event) {
        var field = {};
        field[fieldName] = event.target.value;
        this.setState(field);
    }

    handleMobility() {
        this.setState((state) => ({
            mobility: !state.mobility
        }));
    }

    handleVehicle() {
        this.setState((state) => ({
            vehicle: !state.vehicle
        }));
    }

    handleActive() {
        this.setState((state) => ({
            ativo: !state.ativo
        }));
    }

    handleNoAdress() {
        this.setState((state) => ({
            noAddr: !state.noAddr
        }));
    }

    toggleSearch() {
        this.setState((state) => ({
            showSearch: !state.showSearch
        }));
    }

    updateTable(event) {
        console.log("Fui chamado!");
    }

    clearFields() {
        this.setState({
            enrollmentNumber: '',
            name: '',
            turn: undefined,
            schoolCode: undefined,
            school: '',
            direction: undefined,
            mobility: false,
            vehicle: false,
            active: true,
            noAddr: false,
            outlier: undefined
        });
    }
    render() {

        return (
            <section className="content">
                <div className="box">
                    <Title title="Alunos" icon="map" />
                    <div className="box-body">
                        <form action="" method="post" onSubmit={this.updateTable}>
                            <div>
                                <FormField label={"Matricula"} type="text" name="enrollment" id="enrollment" value={this.state.enrollmentNumber} onChange={this.changeField.bind(this, 'enrollmentNumber')} classes="col-md-2" />
                                <FormField label={"Nome"} type="text" name="name" id="name" value={this.state.name} onChange={this.changeField.bind(this, 'name')} classes="col-md-10" />

                                {/* <div className={"form-group col-md-12"}>
                                    <fieldset>
                                        <legend>Escola</legend>
                                        <div className="input-group">
                                            <input type="text" value={this.state.school} className="form-control" disabled />
                                            <div className="input-group-btn">
                                                <button type="button" className="btn btn-primary" onClick={this.toggleSearch.bind(this)}><i className="glyphicon glyphicon-search" alt="" /></button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div> */}
                                <div className="form-group col-md-2">
                                    <fieldset>
                                        <legend>SENTIDO</legend>
                                        <select name="transport" id="direction" className="form-control" value={this.state.direction ? this.state.direction : ''} onChange={this.changeField.bind(this, "direction")}>
                                            <option value={""} disabled>SELECIONE</option>
                                            <option value={"1"}>Ida</option>}
                                        <option value={"2"}>Volta</option>}
                                        <option value={"3"}>Ida e Volta</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <FormField label={"Telefone"} mask="(99) 9999-9999" type="text" name="telephone" id="telephone" value={this.state.telephone} onChange={this.changeField.bind(this, 'telephone')} classes={"col-md-2"} />
                                <FormField label={"Celular"} mask="(99) 9 9999-9999" type="text" name="phone" id="phone" value={this.state.phone} onChange={this.changeField.bind(this, 'phone')} classes={"col-md-2"} />

                                <div className="form-group col-md-12">
                                    <fieldset>
                                        <legend>Outros:{this.state.schoolErrorMessage}</legend>
                                        <div>
                                            <div className="col-md-3">
                                                <Checkbox checkboxClass="icheckbox_minimal-blue" checked={this.state.mobility} increaseArea="20%" label={" Mobilidade Reduzida"} onClick={this.handleMobility.bind(this)} />
                                            </div>

                                            <div className="col-md-3">
                                                <Checkbox checkboxClass="icheckbox_minimal-blue" checked={this.state.vehicle} increaseArea="20%" label={" Veiculo Especial"} onClick={this.handleVehicle.bind(this)} />}
                                    </div>
                                            <div className="col-md-3">
                                                <Checkbox checkboxClass="icheckbox_minimal-blue" checked={this.state.active} increaseArea="20%" label={" Ativo"} onClick={this.handleActive.bind(this)} defaultChecked />
                                            </div>
                                            <div className="col-md-3">
                                                <Checkbox checkboxClass="icheckbox_minimal-blue" checked={this.state.noAddr} increaseArea="20%" label={" Sem Endereço"} onClick={this.handleNoAdress.bind(this)} />}
                                    </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <Buttons route="/alunos/registrar" submit={this.updateTable.bind(this)} clear={this.clearFields.bind(this)} />
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        );
    }
}