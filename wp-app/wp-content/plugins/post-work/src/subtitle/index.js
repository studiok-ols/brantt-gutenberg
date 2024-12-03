import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import Edit from './edit';
import Save from './save';
import metadata from './block.json';

registerBlockType( metadata.name, {
	icon: {
		src: "edit",
		background: "rgba(254, 100, 224, 0.52)"
	},
	attributes: {
		content: {
			type: 'string',
			source: 'html',
			selector: 'h2'
		}
	},
	edit: Edit,
	save: Save,
} );
