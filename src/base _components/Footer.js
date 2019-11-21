import React, { Component } from 'react';

export default class Footer extends Component {
	render() {
		return (
			<footer className="main-footer" >
				<div className="pull-right hidden-xs">
					<b>Versão</b> 1.0.0
			    </div>
				<strong>
					Copyright &copy; 2018 EasyAppointment
		    	</strong>. Todos os direitos reservados.
		  	</footer>
		);
	}
}