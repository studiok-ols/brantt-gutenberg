import { registerBlockType } from '@wordpress/blocks';
import './style.scss';

import Edit from './edit';
import metadata from './block.json';

registerBlockType( metadata.name, {
	// attributes: {
	// 	radio: {
	// 		type: 'string',
	// 		default: 'asc',
	// 	},
	// },
	icon: {
		src: "editor-ul",
		background: "rgba(254, 100, 54, 0.52)",
	},
	edit: Edit,
} );
