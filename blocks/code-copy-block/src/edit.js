import { useState } from 'react';
import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextareaControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
    const { content } = attributes;
    const blockProps = useBlockProps();

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Settings', 'code-copy-block')}>
                    <TextareaControl
                        label={__('Code Snippet', 'code-copy-block')}
                        value={content}
                        onChange={(value) => setAttributes({ content: value })}
                        help={__('Enter your code snippet here.', 'code-copy-block')}
                    />
                </PanelBody>
            </InspectorControls>
            <div {...blockProps}>
                <textarea
                    value={content}
                    onChange={(e) => setAttributes({ content: e.target.value })}
                    placeholder={__('Enter your code here...', 'code-copy-block')}
                />
            </div>
        </>
    );
}
