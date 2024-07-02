<?php
/**
 * Plugin Name:       Code Copy
 * Description:       Example copyable code block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Austin Mans
 * Date of Creation:  07/02/2024
 *
 * @package CreateBlock
 */
 
 function code_copy_block_enqueue_block_editor_assets() {
	 wp_enqueue_script(
		 'code-copy-block-plugin',
		 plugins_url('build/index.js', __FILE__),
		 array('wp-blocks', 'wp-element', 'wp-editor'),
		 filemtime(plugin_dir_path(__FILE__) . 'build/index.js')
	 );
 
	 wp_enqueue_style(
		 'code-copy-plugin-editor',
		 plugins_url('build/index.css', __FILE__),
		 array('wp-edit-blocks'),
		 filemtime(plugin_dir_path(__FILE__) . 'build/index.css')
	 );
 }
 
 add_action('enqueue_block_editor_assets', 'code_copy_enqueue_block_editor_assets');
 
