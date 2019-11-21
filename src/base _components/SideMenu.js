import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import ItemMenu from './ItemMenu.js';

export default class SideMenu extends Component {
	render() {
		return (
			<aside className="main-sidebar">
				<section className="sidebar">
					<ul className="sidebar-menu">
						<ItemMenu label={"Alunos"} name={"Alunos"} route="/alunos" icon="map" />
						{/* <li className="treeview" onClick={this.handleSrm.bind(this)}>
							<Link to='/srm/'>
								<i className="fa fa-map-marker" />
								<span>SRM</span>
							</Link>
						</li> */}
						<li className="treeview" onClick={this.props.handleLogout}>
							<Link to='/'>
								<i className="fa fa-sign-out" />
								<span>Logout</span>
							</Link>
						</li>
					</ul>
				</section>
			</aside>
		);
	}
}
