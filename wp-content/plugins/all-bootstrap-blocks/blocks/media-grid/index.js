/**
 * WordPress dependencies
 */
import { gallery as icon } from '@wordpress/icons';
import * as areoi from '../_components/Core.js';

/**
 * Internal dependencies
 */
import deprecated from './deprecated';
import edit from './edit-wrapper';
import metadata from './block.json';
import save from './save';
import transforms from './transforms';

const { name } = metadata;

export { metadata, name };

export const settings = {
	icon,
	example: {
		attributes: {
			columns: 2,
		},
		innerBlocks: [
			{
				name: 'core/image',
				attributes: {
					url:
						'https://s.w.org/images/core/5.3/Glacial_lakes%2C_Bhutan.jpg',
				},
			},
			{
				name: 'core/image',
				attributes: {
					url:
						'https://s.w.org/images/core/5.3/Sediment_off_the_Yucatan_Peninsula.jpg',
				},
			},
		],
	},
	transforms,
	edit,
	save,
	deprecated,
};

areoi.blocks.registerBlockType( metadata, {
    icon: icon,
    edit: edit,
    save: () => { 
        return (
            <areoi.editor.InnerBlocks.Content/>
        );
    },
});
