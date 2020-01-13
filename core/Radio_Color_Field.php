<?php

namespace Carbon_Field_Radio_Color;

use Carbon_Fields\Field\Radio_Field;


class Radio_Color_Field extends Radio_Field {
	/**
	 * Prepare the field type for use.
	 * Called once per field type when activated.
	 *
	 * @static
	 * @access public
	 *
	 * @return void
	 */
	public static function field_type_activated() {
		$dir = \Carbon_Field_Radio_Color\DIR . '/languages/';
		$locale = get_locale();
		$path = $dir . $locale . '.mo';
		load_textdomain( 'carbon-field-radio-color', $path );
	}

	/**
	 * Enqueue scripts and styles in admin.
	 * Called once per field type.
	 *
	 * @static
	 * @access public
	 *
	 * @return void
	 */
	public static function admin_enqueue_scripts() {
		$root_uri = \Carbon_Fields\Carbon_Fields::directory_to_url( \Carbon_Field_Radio_Color\DIR );

		// Enqueue field styles.
		wp_enqueue_style( 'carbon-field-radio-color', $root_uri . '/build/bundle.css' );

		// Enqueue field scripts.
		wp_enqueue_script( 'carbon-field-radio-color', $root_uri . '/build/bundle.js', array( 'carbon-fields-core' ) );
	}
}
