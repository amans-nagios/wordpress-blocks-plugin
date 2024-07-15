import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
    const { codeContent } = attributes;
    return (
        <div {...useBlockProps.save()}>
            <pre>{codeContent}</pre>
            <button onclick="copyCodeToClipboard(this.previousElementSibling)">
                {__('Copy Code', 'code-copy-block')}
            </button>
        </div>
    );
}
