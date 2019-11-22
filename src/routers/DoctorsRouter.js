import React, { Component } from 'react';
import { Switch, Route} from 'react-router-dom';
import CustomBox from '../pages/CustomPage.js';

export default class DoctorsRouter extends Component {

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
                    label: "Nascimento:",
                    type: "date",
                    colConfig: "col-md-2"
                },
                {
                    field: "phone",
                    label: "Telefone",
                    type: "text",
                    colConfig: "col-md-2"
                },
                {
                    field: "crm",
                    label: "CRM",
                    type: "number",
                    colConfig: "col-md-2"
                },
                {
                    field: "specialty",
                    label: "Especialidade",
                    type: "text",
                    colConfig: "col-md-6"
                }
            ]
        }
        console.log(this.state.forms)
    }
    render() {
        return (
            <div>
                <Switch>
                    <Route exact path="/doctors/" 
                        component={()=>
                            <CustomBox
                                forms={this.state.forms} 
                                title="Médicos"
                                icon="fas fa-user-md"
                                route="/doctors"
                                headers={["Nome","Nascimento","Telefone","CRM","Especialidade"]}
                            />
                        }
                    />
                </Switch>
            </div>
        );
    }
}