<?php

/* BLOCK: Sola Testimonials - Single Testimonial */

add_action( 'enqueue_block_editor_assets', 'sola_t_single_testimonial_block_editor_assets' );

function sola_t_single_testimonial_block_editor_assets() {

	// Scripts
	wp_enqueue_script( 'sola_t_single_testimonial',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
	);

	$content = '[sola_testimonial]';
	$shortcode = do_shortcode($content);

	$settings['content'] = $shortcode;
	$settings['ajax_url'] = admin_url('admin-ajax.php');

	$args = array(
		'posts_per_page'   => -1,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'testimonials',
		'post_status'      => 'publish'
	);

	$testimonials = get_posts( $args );

	$testimonial_ids = '<select class="sola_t_gutenberg_id_select">';
	$testimonial_ids .= '<option value="0">None</option>';

	foreach ($testimonials as $testimonial) {
		$testimonial_ids .= '<option value="' . $testimonial->ID . '">' . $testimonial->post_title . ' (' . $testimonial->ID . ') ' . '</option>';
	}

	$testimonial_ids .= '</select>';

	$settings['testimonial_ids'] = $testimonial_ids;

	wp_localize_script('sola_t_single_testimonial', 'single_testimonial', $settings);

	wp_enqueue_script( 'sola_t_gutenberg_functions', plugins_url( 'gutenberg_functions.js', __FILE__ ), array( 'jquery' ) );

	// Styles
	sola_t_front_end_styles();

	wp_enqueue_style( 'sola_t_single_testimonial_editor',
		plugins_url( 'editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
}

add_action( 'enqueue_block_assets', 'sola_t_single_testimonial_block_block_assets' );

function sola_t_single_testimonial_block_block_assets() {
	
	// User styles
	wp_enqueue_style( 'sola_t_single_testimonial_user',
		plugins_url( 'style.css', __FILE__ ),
		array( 'wp-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
	);
}
