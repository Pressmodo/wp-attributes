<?php // phpcs:ignore WordPress.Files.FileName
/**
 * Helper functions.
 *
 * @package   wp-attributes
 * @author    Sematico LTD <hello@sematico.com>
 * @copyright 2020 Sematico LTD
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0-or-later
 * @link      https://pressmodo.com
 */

namespace Pressmodo\Attributes;

if ( ! function_exists( __NAMESPACE__ . '\get_attr' ) ) {

	/**
	 * Build list of attributes into a string and apply contextual filter on string.
	 *
	 * The contextual filter is of the form `pressmodo_attr_{context}_output`.
	 *
	 * @param string             $context The context, to build filter name.
	 * @param array<string|bool> $attr Optional. Extra attributes to merge with defaults.
	 * @param null               $args Optional. Extra arguments in case is needed.
	 *
	 * @return string String of HTML attributes and values.
	 */
	function get_attr( string $context, array $attr = array(), $args = null ): string {

		$obj = new Attributes();

		$obj->add( $context, $attr );

		return $obj->render( $context, $args );
	}
}

if ( ! function_exists( __NAMESPACE__ . '\get_attr_e' ) ) {

	/**
	 * Build list of attributes into a string and apply contextual filter on string.
	 *
	 * The contextual filter is of the form `pressmodo_attr_{context}_output`.
	 *
	 * @param  string             $context    The context, to build filter name.
	 * @param  array<string|bool> $attr Optional. Extra attributes to merge with defaults.
	 * @param  null               $args       Optional. Extra arguments in case is needed.
	 */
	function get_attr_e( string $context, array $attr = array(), $args = null ): void {
		echo get_attr( $context, $attr, false, $args ); //phpcs:ignore
	}
}
