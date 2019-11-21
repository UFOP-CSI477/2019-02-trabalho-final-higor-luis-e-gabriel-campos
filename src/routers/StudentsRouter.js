import React, { Component } from 'react';
import { Switch, Route} from 'react-router-dom';

// import RegisterStudents from '../register/StudentsRegister.js';
// import UpdateStudents from '../update/UpdateStudents';
import StudentsBox from '../pages/StudentsPage.js';

export default class StudentsRouter extends Component {
    render() {
        return (
            <div>
                <Switch>
                    <Route exact path="/alunos/" component={StudentsBox} />
                    {/* <Route exact path="/alunos/registrar" component={RegisterStudents} /> */}
                    {/* <Route exact path="/alunos/alterar/:id" component={UpdateStudents} /> */}
                </Switch>
            </div>
        );
    }
}