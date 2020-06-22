<?php // phpcs:ignore WordPress.Files.FileName
/**
 * HTML Attributes generator.
 *
 * @package   wp-attributes
 * @author    Sematico LTD <hello@sematico.com>
 * @copyright 2020 Sematico LTD
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0-or-later
 * @link      https://pressmodo.com
 */

namespace Pressmodo\Attributes;

interface AttributesInterface {

	const ID          = 'id';
	const CLASS_NAME  = 'class';
	const STYLE       = 'style';
	const TITLE       = 'title';
	const TYPE        = 'type';
	const VALUE       = 'value';
	const PLACEHOLDER = 'placeholder';

	/**
	 * Add attributes.
	 *
	 * @param string             $context context
	 * @param array<string|bool> $attr attributes to add
	 * @return AttributesInterface
	 */
	public function add( string $context, array $attr );

	/**
	 * Get attributes
	 *
	 * @param string $context context to retrieve
	 * @return array<string|bool>
	 */
	public function get( string $context );

	/**
	 * Determine if attributes exist for the given context.
	 *
	 * @param string $context context
	 * @return bool
	 */
	public function has( string $context ): bool;

	/**
	 * Remove attributes from a given context.
	 *
	 * @param string $context context
	 * @return AttributesInterface
	 */
	public function remove( string $context );

	/**
	 * Build list of attributes into a string and apply contextual filter on string.
	 *
	 * The contextual filter is of the form `pressmodo_attr_{context}_output`.
	 *
	 * @param  string $context The context, to build filter name.
	 * @param  mixed  $args    Optional. Extra arguments in case is needed.
	 * @return string          String of HTML attributes and values.
	 */
	public function render( string $context, $args = null ): string;
}
