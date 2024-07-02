import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { useState } from '@wordpress/element';

registerBlockType('my-custom-block-plugin/code-block', {
  title: 'Code Block with Copy Button',
  icon: 'editor-code',
  category: 'common',
  attributes: {
    content: {
      type: 'string',
      source: 'html',
      selector: 'pre',
    },
  },
  edit({ attributes, setAttributes }) {
    const blockProps = useBlockProps();
    const { content } = attributes;
    const onChangeContent = (newContent) => {
      setAttributes({ content: newContent });
    };

    return (
      <div {...blockProps}>
        <RichText
          tagName="pre"
          value={content}
          onChange={onChangeContent}
          placeholder="Enter code here..."
        />
        <Button variant='secondary' onClick={() => navigator.clipboard.writeText(content)}>
          Copy Code
        </Button>
      </div>
    );
  },
  save({ attributes }) {
    const blockProps = useBlockProps.save();
    const { content } = attributes;

    return (
      <div {...blockProps}>
        <RichText.Content tagName="pre" value={content} />
        <Button variant='secondary' onClick={() => navigator.clipboard.writeText(content)}>
          Copy Code
        </Button>
      </div>
    );
  },
});