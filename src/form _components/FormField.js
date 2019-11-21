import React from 'react';
import InputMask from 'react-input-mask';

const FormField = (props) =>
    (
        <div className={props.classes + " form-group"}>
            <fieldset>
                {
                    props.label ?
                        <legend>{props.label}{props.errorMessage}</legend>
                        :
                        null
                }
                <InputMask name={props.name} id={props.id} type={props.type} value={props.value} onChange={props.onChange} className={"form-control"} mask={props.mask} />
            </fieldset>
        </div>
    );

export default FormField;