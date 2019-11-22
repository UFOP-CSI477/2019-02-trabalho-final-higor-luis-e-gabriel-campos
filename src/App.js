import React, { Component } from 'react';
import { Switch, Route, Redirect } from 'react-router-dom';

import Header from './base _components/Header';
import SideMenu from './menu_components/SideMenu';
import Content from './base _components/Content';
import Footer from './base _components/Footer';

import Login from './pages/LoginPage';

import PaginaInicial from './pages/HomePage';

import AlunosRouter from './routers/StudentsRouter';
import PatientsRouter from './routers/PatientsRouter';


import ErrorPage from './pages/ErrorPage.js';

export default class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            loggedIn: true,
            redirect: false,
            errorOccurred: false
        };
    }

    componentDidMount(){
        console.log("component did mount");
    }
    
    componentDidCatch(error, info) {
        this.setState({ errorOccurred: true });
    }

    handleLogin() {
        this.forceUpdate();
    }

    handleLogout() {
        sessionStorage.clear();
        this.forceUpdate();
    }

    handleErrorLogout() {
        this.setState({errorOccurred: false});
        sessionStorage.clear();
        this.forceUpdate();
    }

    handleRedirect() {
        if (this.state.redirect) {
            this.setState({
                redirect: false
            });
            return <Redirect to='/' />
        }
    }

    render() {
        if (this.state.errorOccurred) {
            return (
                <ErrorPage handleLogout={this.handleErrorLogout.bind(this)} />
            );
        }
        if (this.state.loggedIn === false) {
            return (
                <div>
                    <Switch>
                        {/* <Route exact path="/recuperacao/:email/:token" component={RecuperacaoDeSenha} /> */}
                        <Route path="*" render={() => <Login handleLogin={this.handleLogin.bind(this)} />} />
                    </Switch>
                </div>
            );
        }
        // if (sessionStorage.getItem('EasyAppointment_Token') === null) {
        //     return (
        //         <div>
        //             <Switch>
        //                 <Route exact path="/recuperacao/:email/:token" component={RecuperacaoDeSenha} />
        //                 <Route path="*" render={() => <Login handleLogin={this.handleLogin.bind(this)} />} />
        //             </Switch>
        //         </div>
        //     );
        // }
        // if (sessionStorage.getItem('EasyAppointment_Cidade') === '0' || sessionStorage.getItem('EasyAppointment_Cidade') === '') {
        //     return (
        //         <IntlProvider locale={this.state.locale} messages={this.mensagens[this.state.locale]}>    
        //             <div>
        //                 <Header enLocale={this.setEnLocale} ptbrLocale={this.setPtbrLocale} messages={this.state.messages} />
        //                 {this.handleRedirect()}
        //                 <SideMenu messages={this.state.messages} handleLogout={this.handleLogout.bind(this)} />
        //                 <Content messages={this.state.messages}>
        //                     <PaginaInicial messages={this.state.messages} />
        //                 </Content>
        //                 <Footer/>
        //             </div>
        //         </IntlProvider>
        //     );
        // }
        return (
            <div>
                
              <Header/>
              <SideMenu  handleLogout={this.handleLogout.bind(this)} />
              <Content>
                  <Switch>
                      <Route path="/alunos" component={AlunosRouter} />
                      <Route path="/patients" component={PatientsRouter} />
                      <Route path="*" component={PaginaInicial} />} />
                  </Switch>
              </Content>
              <Footer />
            </div>
        );
    }
}

