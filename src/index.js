/**
 * External dependencies.
 */
import { registerFieldType } from '@carbon-fields/core';

/**
 * Internal dependencies.
 */
import './style.scss';
import RadioColorField from './main';

registerFieldType( 'radio_color', RadioColorField );
