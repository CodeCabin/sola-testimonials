/* BLOCK: Sola Testimonial - Single Testimonial */

( function() {

	var __ = wp.i18n.__;
	var el = wp.element.createElement;
	var Editable = wp.blocks.Editable;
	var children = wp.blocks.source.children;
	var registerBlockType = wp.blocks.registerBlockType;

	var block_heading = '<h3>Single Testimonial</h3>';
	var block_content = single_testimonial.content;
	var select_content = single_testimonial.testimonial_ids;

	registerBlockType( 'sola-testimonials/sola-single', {
		title: __( 'Single Testimonial (Sola)', 'SOLA_T' ),
		icon: 'format-quote',
		category: 'common',
		attributes: {
			content: children( 'p' ),
		},

		edit: function( props ) {

			var content = props.attributes.content;
			var focus = props.focus;

			function onChangeContent( newContent ) {
				props.setAttributes( { content: newContent } );
			}

			jQuery(document).on('change', '.sola_t_gutenberg_id_select', function(){
				var id = jQuery(this).val();
				props.setAttributes( { content: id } );
			});

			var testimonial_content = el(
				'div',
				{ 	
					dangerouslySetInnerHTML: { __html: '' } 
				},
			);

			var header_content = el(
				'div',
				{ 	
					dangerouslySetInnerHTML: { __html: block_heading },
				},
			);

			var id_select = el(
				'span',
				{ 	
					dangerouslySetInnerHTML: { __html: select_content } 
				},
			);

			var testimonial_icon = el(
				'span',
				{ className: 'sola_t_gutenberg_preview_icon dashicons dashicons-format-quote' }
			);

			var testimonial_display = el(
				'div',
				{ className: 'sola_t_gutenberg_display' },
				testimonial_icon
			);

			var styles = {
				display: 'none'
			}

			var editable_content = el(
				Editable,
				{ 	
					tagName: 'p',
					id: 'sola-testimonial-gutenberg',
					value: content,
					onChange: onChangeContent,
					focus: focus,
					onFocus: props.setFocus,
					style: styles
				},
			);

			var label = el(
				'label',
				{ 
					id: 'sola_t_gutenberg_select_label'
				},
				'Select a Testimonial: '
			);

			var select_testimonial_id = el(
				'div',
				{
					className: 'sola_t_gutenberg_select_section'
				},
				label,
				id_select
				
			);

			return el(
				'div',
				{ id: 'sola-testimonial-gutenberg', className: 'sola_t_single' },
				header_content,
				select_testimonial_id,
				testimonial_display,
				editable_content
				
			);
		},

		save: function( props ) {	

			var content = '[sola_testimonial id=' + props.attributes.content + ']';

			return el(
				'div',
				{ 	id: 'sola-testimonial-gutenberg',
					dangerouslySetInnerHTML: { __html: content } 
				},
			);
		},
	} );
})();

