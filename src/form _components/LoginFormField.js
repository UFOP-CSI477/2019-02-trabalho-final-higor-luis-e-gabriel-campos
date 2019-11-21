import React from 'react';
import InputMask from 'react-input-mask';

const FormFieldLogin = (props) =>
    (
        <div className="form-group has-feedback">
            <InputMask type={props.type} name={props.name} id={props.id} className="form-control" value={props.value} placeholder={props.placeholder} onChange={props.onChange} mask={props.mask} />
            <span className={props.spanClasses} />
        </div>
    );

export default FormFieldLogin;