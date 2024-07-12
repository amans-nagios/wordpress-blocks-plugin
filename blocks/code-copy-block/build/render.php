<?php

function render_code_copy_block($attributes, $content) {
    // Extract the content attribute which contains the code snippet
    $code_content = isset($attributes['content']) ? $attributes['content'] : '';

    // Create the block content using the extracted attribute
    $block_content = '<pre ' . get_block_wrapper_attributes() . '><code>' . esc_html($code_content) . '</code></pre>';

    // Return the safe block content
    return wp_kses_post($block_content);
}

// Register the render callback
register_block_type('create-block/code-copy-block', array(
    'render_callback' => 'render_code_copy_block',
));
