<?php
/*
Plugin Name: WordPress Blocks Plugin
Description: A plugin that includes multiple custom Gutenberg blocks.
Version: 0.1.0
Author: amans
*/

function register_multiple_blocks() {
    $blocks = [
        'copyright-date-block',
        'code-copy-block'
    ];

    foreach ($blocks as $block) {
        $asset_file = include(plugin_dir_path(__FILE__) . "blocks/$block/build/index.asset.php");

        wp_register_script(
            "namespace-$block-editor-script",
            plugins_url("blocks/$block/build/index.js", __FILE__),
            $asset_file['dependencies'],
            $asset_file['version']
        );

        wp_register_style(
            "namespace-$block-editor-style",
            plugins_url("blocks/$block/build/index.css", __FILE__),
            array('wp-edit-blocks'),
            filemtime(plugin_dir_path(__FILE__) . "blocks/$block/build/index.css")
        );

        register_block_type("create-block/$block", array(
            'editor_script' => "namespace-$block-editor-script",
            'editor_style' => "namespace-$block-editor-style",
            'render_callback' => "render_{$block}_block"
        ));
    }
}
add_action('init', 'register_multiple_blocks');

function render_copyright_date_block($attributes, $content) {
    $current_year = date("Y");

    if (isset($attributes['fallbackCurrentYear']) && $attributes['fallbackCurrentYear'] === $current_year) {
        $block_content = $content;
    } else {
        if (!empty($attributes['startingYear']) && !empty($attributes['showStartingYear'])) {
            $display_date = $attributes['startingYear'] . '–' . $current_year;
        } else {
            $display_date = $current_year;
        }

        $block_content = '<p ' . get_block_wrapper_attributes() . '>© ' . esc_html($display_date) . '</p>';
    }

    return wp_kses_post($block_content);
}

function render_code_copy_block($attributes, $content) {
    $code_content = isset($attributes['content']) ? $attributes['content'] : '';
    $block_content = '<pre ' . get_block_wrapper_attributes() . '><code>' . esc_html($code_content) . '</code></pre>';
    return wp_kses_post($block_content);
}
