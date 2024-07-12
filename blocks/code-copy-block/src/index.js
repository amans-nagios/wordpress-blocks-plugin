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
        <path d="M9.4,16.6l-4.8-4.8l4.8-4.8L8,5.2L2.4,10.8L8,16.4L9.4,16.6z M14.6,7.4l4.8,4.8l-4.8,4.8L16,18.8l5.6-5.6L16,7.6 L14.6,7.4z M14.8,5.2l-5.6,12l1.4,0.4l5.6-12L14.8,5.2z"></path>
    </svg>
);

registerBlockType(metadata.name, {
    icon: codeIcon,
    edit: Edit,
    save
});
