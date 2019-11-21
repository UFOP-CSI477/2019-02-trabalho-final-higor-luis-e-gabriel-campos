import React from 'react';

const Title = (props) => (
    <div className="box-header with-border">
        <i className={"fa fa-" + props.icon}></i>
        <h1 className="box-title"><b>{props.title}</b></h1>
    </div>
);

export default Title;