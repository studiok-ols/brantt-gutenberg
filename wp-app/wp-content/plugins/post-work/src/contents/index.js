import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import Edit from './edit';
import Save from './save';
import metadata from './block.json';

registerBlockType( metadata.name, {
	icon: {
		src: "media-text",
		background: "rgba(254, 100, 224, 0.52)",
	},
	attributes: {
		content: {
			type: 'string',
			source: 'html',
			selector: 'div'
		}
	},
	edit: Edit,
	save: Save,
} );
