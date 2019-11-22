import React from 'react';
import { Link } from 'react-router-dom';

const ItemMenu = (props) => (
	<li className="treeview">
      <Link to={{ pathname: props.route}}>
        <i className={"fas fa-" + props.icon}></i>
        <span>
          {'\t'+ props.label}
        </span>
      </Link>
  </li>
);

export default ItemMenu;