import React from 'react';

const Content = (props) => (
	<div className="content-wrapper" style={{ minHeight: '90vh' }}>
      	{props.children}
    </div>
);

export default Content;