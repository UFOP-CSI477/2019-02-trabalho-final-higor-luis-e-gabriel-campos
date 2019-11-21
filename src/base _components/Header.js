import React, { Component } from 'react';
import { Link } from 'react-router-dom';
export default class Header extends Component {
    render() {
        return (
            <header className="main-header">
                <Link to="/" className="logo">
                    <span className="logo-mini">
                        <i className="fa fa-plus-square" aria-hidden="true"></i>
                    </span>
                    <span className="logo-lg">
                        <i className="fa fa-plus-square" aria-hidden="true"></i> EasyAppointment
		      		</span>
                </Link>
                <nav className="navbar navbar-static-top">
                    <a href="# " className="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span className="sr-only">Toggle navigation</span>
                    </a>
                </nav>
            </header>
        );
    }
}

