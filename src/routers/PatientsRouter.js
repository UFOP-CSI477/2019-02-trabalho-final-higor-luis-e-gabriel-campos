import React, { Component } from 'react';
import { Switch, Route} from 'react-router-dom';

// import RegisterStudents from '../register/StudentsRegister.js';
// import UpdateStudents from '../update/UpdateStudents';
// import PatientsBox from '../pages/StudentsPage.js';
import CustomPage from '../pages/CustomPage.js';

export default class PatientsRouter extends Component {

    constructor(){
        super();
        this.state = {
            forms: [ 
                {
                    field:"name",
                    label: "Nome:",
                    type: "text",
                    colConfig: "col-md-12"
                },
                {
                    field: "birthdate",
                    label: "Data de Nascimento:",
                    type: "text",
                    colConfig: "col-md-12"
                }
            ]
        }
        console.log(this.state.forms)
    }
    render() {
        return (
            <div>
                <Switch>
                    <Route exact path="/patients/" 
                        component={()=>
                            <CustomPage 
                                forms={this.state.forms} 
                                title="Pacientes"
                                icon="fas fa-user-injured"
                                route="/patients"

                            />
                        }
                    />
                    {/* <Route exact path="/patients/" component={CustomPage} forms={this.state.forms} /> */}
                    {/* <Route exact path="/alunos/registrar" component={RegisterStudents} /> */}
                    {/* <Route exact path="/alunos/alterar/:id" component={UpdateStudents} /> */}
                </Switch>
            </div>
        );
    }
}