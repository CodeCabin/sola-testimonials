/* BLOCK: Sola Testimonial - All Testimonials */

( function() {

	var __ = wp.i18n.__;
	var el = wp.element.createElement;
	var children = wp.blocks.source.children;
	var registerBlockType = wp.blocks.registerBlockType;

	var block_heading = '<h3>All Testimonials</h3>';
	var block_content = testimonial_content;

	registerBlockType( 'sola-testimonials/sola-all', {
		title: __( 'All Testimonials (Sola)', 'SOLA_T' ),
		icon: 'format-quote',
		category: 'common',

		edit: function( props ) {
			
			return el(
				'div',
				{ 	id: 'sola-testimonial-all-gutenberg',
					dangerouslySetInnerHTML: { __html: block_heading + block_content }
				},
			);
		},

		save: function( props ) {

			return el(
				'div',
				{ 	id: 'sola-testimonial-all-gutenberg',
					dangerouslySetInnerHTML: { __html: block_content } 
				},
			);
		},
	} );
})();
