import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
    const { content } = attributes;

    return (
        <pre {...useBlockProps.save()}>
            <code>{content}</code>
        </pre>
    );
}
