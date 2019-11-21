import React, { Component } from 'react';
import Title from '../base _components/Title.js';

export default class HomePage extends Component {
	render() {
		return (
			<section className="content">
				<div className="box">
					<Title title="Pagina inicial" icon="home" />
                    <div>
                        testeee
                    </div>
				</div>
			</section>
		);
	}
}