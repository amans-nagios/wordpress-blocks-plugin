import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import metadata from './block.json';
import save from './save';

const codeIcon = (
    <svg
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true"
        focusable="false"
    >
        <path d="M8.59 16.34L13.17 12l-4.58-4.34L10 6l6 6-6 6zM4 6h2v12H4z"></path>
    </svg>
);

registerBlockType(metadata.name, {
    icon: codeIcon,
    edit: Edit,
    save,
});
