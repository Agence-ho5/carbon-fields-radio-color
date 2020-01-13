/**
 * External dependencies.
 */
import { Component } from '@wordpress/element';

class RadioColorField extends Component {
	handleChange = ( e ) => {
		const { id, onChange } = this.props;

		onChange( id, e.target.value );
	}

	/**
	 * Renders the radio options
	 *
	 * @return {Object}
	 */
	renderOptions() {
		const {
			id,
			field,
			value,
			name
		} = this.props;

		return (
			<ul className="cf-radio__list">
				{ field.options.map( ( option, index ) => (
					<li className="cf-radio_color__list-item" key={ index }>
						<input
							type="radio"
							id={ `${ id }-${ option.value }` }
							name={ name }
							value={ option.value }
							checked={ value === option.value }
							className="cf-radio_color__input"
							onChange={ this.handleChange }
							{ ...field.attributes }
						/>

						<label title={ option.value } className={ 'cf-radio_color__label' +( value === option.value ? ' cf-radio_color__label--active' : '' ) } htmlFor={ `${ id }-${ option.value }` }>
							<span style={ {backgroundColor: option.label} }></span>
						</label>
					</li>
				) ) }
			</ul>
		);
	}

	/**
	 * Renders the component.
	 *
	 * @return {Object}
	 */
	render() {
		const { field } = this.props;

		return (
			field.options.length > 0
				? this.renderOptions()
				: <NoOptions />
		);
	}
}

export default RadioColorField;
