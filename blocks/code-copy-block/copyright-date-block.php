<?php
/**
 * Plugin Name:       Code Copy Block
 * Description:       A block that displays a code snippet with a copy button.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            amans
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       code-copy-block
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 */
function create_block_code_copy_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_code_copy_block_init' );
