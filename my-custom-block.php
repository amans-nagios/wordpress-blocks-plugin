<?php
/**
 * Plugin Name:       My Custom Block
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Austin Mans
 *
 * @package CreateBlock
 */
 
 function my_custom_block_enqueue_block_editor_assets() {
	 wp_enqueue_script(
		 'my-custom-block-plugin',
		 plugins_url('build/index.js', __FILE__),
		 array('wp-blocks', 'wp-element', 'wp-editor'),
		 filemtime(plugin_dir_path(__FILE__) . 'build/index.js')
	 );
 
	 wp_enqueue_style(
		 'my-custom-block-plugin-editor',
		 plugins_url('build/index.css', __FILE__),
		 array('wp-edit-blocks'),
		 filemtime(plugin_dir_path(__FILE__) . 'build/index.css')
	 );
 }
 
 add_action('enqueue_block_editor_assets', 'my_custom_block_enqueue_block_editor_assets');
 
