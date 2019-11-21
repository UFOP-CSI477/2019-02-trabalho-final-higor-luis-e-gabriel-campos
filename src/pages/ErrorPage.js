import React, { Component } from 'react';

// import './CSS/ErrorPage.css';

export default class ErrorPage extends Component {
    render() {
        return (
            <div className="hold-transition error-page" style={{ minHeight: '100vh' }}>
                <div className="row error-message">
                    <div className="col-md-3" />
                    <div className="col-md-2">
                        <p class="headline text-red error-code">:(</p>
                    </div>
                    <div className="col-md-4 error-content">
                        <h3><i class="fa fa-warning text-red"></i>Alguma coisa aconteceu!</h3>
                        <p>
                            Ocorreu um erro inesperado, por favor atualize a pagina ou clique
                            <span  onClick={this.props.handleLogout}><a href="# "> aqui </a></span>
                            para voltar à pagina inicial.
                        </p>
                    </div>
                    <div className="col-md-3" />
                </div>
            </div>
        );
    }
}