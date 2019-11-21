/*global $*/
import React, { Component } from 'react';
import { Checkbox } from 'react-ui-icheck';
import LoginFormField from '../form _components/LoginFormField';


export default class Login extends Component {
    constructor() {
        super();
        this.state = {
            email: '',
            password: '',
            message: '',
            forgot: false,
            'srmControl': 0
        };
        this.changeField = this.changeField.bind(this);
        this.sendForm = this.sendForm.bind(this);
        this.sendRecoveryForm = this.sendRecoveryForm.bind(this);
        this.clearFields = this.clearFields.bind(this);
        this.handleCheckbox = this.handleCheckbox.bind(this);
        this.fakeLogin = this.fakeLogin.bind(this);
    }

    componentDidMount() {
        document.addEventListener("keydown", this.handleKeyPress, false);
    }

    componentWillUnmount() {
        document.removeEventListener("keydown", this.handleKeyPress, false);
    }

    changeField(fieldName, event) {
        var field = {};
        field[fieldName] = event.target.value;
        this.setState(field);
    }

    clearFields() {
        this.setState({
            email: '',
            password: ''
        });
    }

    handleCheckbox() {
        this.setState({
            forgot: !this.state.forgot
        });
    }

    sendForm(event) {
        event.preventDefault();
        $.ajax({
            url: "http://localhost:8080/EasyAppointment-service/rest/autenticacao/auth",
            contentType: 'application/json',
            type: 'post',
            data: JSON.stringify({
                username: this.state.email,
                senha: this.state.password
            }),
            success: function (response) {
                sessionStorage.setItem('EasyAppointment_Email', this.state.email);
                sessionStorage.setItem('EasyAppointment_Password', this.state.password);
                sessionStorage.setItem('EasyAppointment_Token', response[0]);
                sessionStorage.setItem('EasyAppointment_Perfil', response[1]);
                sessionStorage.setItem('EasyAppointment_Estado', response[2]);
                sessionStorage.setItem('EasyAppointment_Cidade', response[3]);
                sessionStorage.setItem('EasyAppointment_CidadeNome', response[4]);
                sessionStorage.setItem('EasyAppointment_Nome', response[5]);
                sessionStorage.setItem('EasyAppointment_Lat', response[6]);
                sessionStorage.setItem('EasyAppointment_Lng', response[7]);
                sessionStorage.setItem('srmControl', this.state.srmControl);

                this.props.handleLogin();
            }.bind(this),
            error: function (response) {
                if (response.status === 401) {
                    this.setState({ message: "Email ou senha invalidos" });
                    this.clearFields();
                } else {
                    console.log(response);
                    this.setState({ message: "Não foi possivel contatar o servidor" });
                    this.clearFields();
                }
            }.bind(this)
        }
        );
    }

    sendRecoveryForm(evento) {
        evento.preventDefault();
        $.ajax({
            url: "http://localhost:8080/EasyAppointment-service/rest/autenticacao/recover",
            contentType: 'application/json',
            type: 'put',
            data: JSON.stringify({
                email: this.state.email
            }),
            success: function (response) {
                this.setState({ message: "Email de recuperação enviado." });
            }.bind(this),
            error: function (response) {
                if (response.status === 401) {
                    this.setState({ message: "Email invalido" });
                    this.clearFields();
                } else {
                    this.setState({ message: "Não foi possivel contatar o servidor" });
                    this.clearFields();
                }
            }.bind(this)
        }
        );
    }

    handleKeyPress = (event) => {
        if (event.keyCode === 13) {
            if (this.state.forgot) {
                this.sendRecoveryForm(event);
            } else {
                this.sendForm(event);
            }
        }
    }

    fakeLogin() {
        sessionStorage.setItem('EasyAppointment_Token', 'tokenFalsificado');
        sessionStorage.setItem('EasyAppointment_Perfil', '0');
        sessionStorage.setItem('EasyAppointment_Lat', '0');
        sessionStorage.setItem('EasyAppointment_Lng', '0');
        sessionStorage.setItem('EasyAppointment_Perfil', '1');
        sessionStorage.setItem('srmControl', this.state.srmControl);
        this.props.handleLogin();
    }

    render() {
        return (
            <div className="hold-transition login-page" style={{ minHeight: '100vh' }}>
                <button className="btn btn-danger" onClick={this.fakeLogin}>Botão para acessar sem login</button>
                <div className="login-box">
                    <div className="login-logo">
                        <b>EasyAppointment</b>
                    </div>
                    <div className="login-box-body">
                        <p className="login-box-msg">
                            {!this.state.forgot ? 'Login' : 'Recuperar minha senha'}
                        </p>
                        <span>LOGIN</span>
                        <form>
                            <LoginFormField type="email" name="email" id="email" value={this.state.email} placeholder="Email" spanClasses="glyphicon glyphicon-envelope form-control-feedback" onChange={this.changeField.bind(this, 'email')} />
                            {!this.state.forgot ?
                                <div>
                                    <LoginFormField type="password" name="senha" id="senha" value={this.state.password} placeholder="Senha" spanClasses="glyphicon glyphicon-lock form-control-feedback" onChange={this.changeField.bind(this, 'password')} />
                                    <div className="row">
                                        <div className="col-xs-12 text-right">
                                            <button type="button" className="btn btn-primary btn-block btn-flat" onClick={this.sendForm}>Conectar</button>
                                        </div>
                                    </div>
                                </div>
                                :
                                <button type="button" className="btn btn-primary btn-block btn-flat" onClick={this.sendRecoveryForm}>Recuperar senha</button>
                            }
                        </form>
                        <div className="checkbox">
                            <label>
                                <div className="col-md-12">
                                    <Checkbox
                                        checkboxClass="icheckbox_minimal-blue"
                                        increaseArea="20%"
                                        label=' Esqueci minha senha'
                                        onClick={this.handleCheckbox}
                                    />
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}