import { useState } from 'react';
import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextareaControl, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
    const { codeContent } = attributes;

    const blockProps = useBlockProps();

    const handleCopy = () => {
        navigator.clipboard.writeText(codeContent).then(() => {
            alert(__('Code copied to clipboard!', 'code-copy-block'));
        });
    };

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Settings', 'code-copy-block')}>
                    <TextareaControl
                        label={__('Code Content', 'code-copy-block')}
                        value={codeContent}
                        onChange={(value) => setAttributes({ codeContent: value })}
                    />
                </PanelBody>
            </InspectorControls>
            <div {...blockProps}>
                <pre>{codeContent}</pre>
                <Button variant='secondary' onClick={handleCopy}>
                    {__('Copy Code', 'code-copy-block')}
                </Button>
            </div>
        </>
    );
}
