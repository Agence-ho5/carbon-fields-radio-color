<?php
/**
 * Plugin Name: Carbon Field Radio Color
 * Description: Radio Color Field extension for Carbon Fields.
 * Version: 1.0.0
 * Author: Fabien LEGE
 * Author URI: https://agenceho5.com
 * License: GPL2
 * Requires at least: 4.0
 * Tested up to: 4.8
 * Text Domain: carbon-field-radio_color
 * Domain Path: /languages
 */

require_once __DIR__.'/core/Radio_Color_Field.php';

use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Radio_Color\Radio_Color_Field;

define('Carbon_Field_Radio_Color\\DIR', __DIR__);

add_action('after_setup_theme', function () {
	Carbon_Fields::extend(Radio_Color_Field::class, function ($container) {
		return new Radio_Color_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
	});
}, 99);
