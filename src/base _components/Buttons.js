import React from 'react';
import { withRouter } from 'react-router-dom';

const Buttons = withRouter((props) => (
	<div className="text-center">
		<div className="box-body"></div>
		<div className="btn-group">
			<a className="btn btn-app" onClick={ props.clear }><i className="glyphicon glyphicon-erase" alt="" /> Limpar </a>
			<a className="btn btn-app" onClick={ props.submit }><i className="glyphicon glyphicon-search" alt="" /> Procurar </a>
			<a className="btn btn-app" onClick={() => props.history.push(props.route)}><i className="glyphicon glyphicon-plus-sign" alt="" /> Novo </a>
		</div>
	</div>
));

export default Buttons;