<?php

function render_code_copy_block($attributes, $content) {
    $code_content = isset($attributes['codeContent']) ? $attributes['codeContent'] : '';
    
    if (empty($code_content)) {
        return '';
    }
    
    $block_content = '<div ' . get_block_wrapper_attributes() . '>';
    $block_content .= '<pre>' . esc_html($code_content) . '</pre>';
    $block_content .= '<button onclick="copyCodeToClipboard(this.previousElementSibling)">' . esc_html__('Copy Code', 'code-copy-block') . '</button>';
    $block_content .= '</div>';
    
    return $block_content;
}

function copy_code_to_clipboard_js() {
    ?>
    <script type="text/javascript">
        function copyCodeToClipboard(codeElement) {
            navigator.clipboard.writeText(codeElement.innerText).then(() => {
                alert('<?php echo esc_js(__('Code copied to clipboard!', 'code-copy-block')); ?>');
            });
        }
    </script>
    <?php
}

add_action('wp_footer', 'copy_code_to_clipboard_js');
