jQuery(document).ready( function($){

	// Update select fields on page load
	$('#sola-testimonial-gutenberg .blocks-editable p').each(function(){
		var id = $(this).html();
		$(this).closest('#sola-testimonial-gutenberg').find('.sola_t_gutenberg_id_select').val(id);
	});

	// Update preview on page load
	$('.sola_t_gutenberg_id_select').each(function(){
		var id = $(this).val();
		sola_t_gutenberg_ajax(id, this);
	});

	// Update preview if the ID has been changed
	$(document).on('change', '.sola_t_gutenberg_id_select', function(){
		console.log('select changed');
		$(this).closest('#sola-testimonial-gutenberg').find('#sola-testimonial-gutenberg .blocks-editable p').html(id);
		console.log($(this).closest('#sola-testimonial-gutenberg').find('#sola-testimonial-gutenberg .blocks-editable p').html());
		var id = $(this).val();
		sola_t_gutenberg_ajax(id, this);
	});
});

function sola_t_gutenberg_ajax(id, element) {

	console.log(id);
	// Return if no testimonials are selected
	if (id == '0' || id == null) {
		$(element).val(0);
		$(element).parent().closest('#sola-testimonial-gutenberg').find('.sola_t_gutenberg_display').first().html('<span class="sola_t_gutenberg_preview_icon dashicons dashicons-format-quote"></span>');
		return;
	}

	// Loader Icon
	$(element).parent().closest('#sola-testimonial-gutenberg').find('.sola_t_gutenberg_display').first().html('<span class="sola_t_gutenberg_loader"></span>');
	
	// Change testimonial via AJAX
	setTimeout(function(){
		$.ajax({
			url: single_testimonial.ajax_url,
			context: element,
			type: 'post',
			contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
			data: {
				id: id,
				action: 'sola_t_update_gutenberg_changes'
			},

			error: function(response) {
				alert('Something went wrong. Please try again.');
			},

			success: function(response) {
				$(element).closest('#sola-testimonial-gutenberg').find('.sola_t_gutenberg_display').first().html(response);
			}

		});
	}, 500 );
}