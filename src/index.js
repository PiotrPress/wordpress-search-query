import { registerBlockType } from '@wordpress/blocks';
import ServerSideRender from '@wordpress/server-side-render';

registerBlockType( 'piotrpress/search-query', { edit: () => <ServerSideRender block='piotrpress/search-query' /> } );