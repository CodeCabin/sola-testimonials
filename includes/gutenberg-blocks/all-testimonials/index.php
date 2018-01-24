<?php

/* BLOCK: Sola Testimonials - All Testimonials */

add_action( 'enqueue_block_editor_assets', 'sola_t_all_testimonials_block_editor_assets' );

function sola_t_all_testimonials_block_editor_assets() {

	// Scripts
	wp_enqueue_script( 'sola_t_all_testimonials',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
	);

	$content = '[sola_t_all_testimonials]';
	$shortcode = do_shortcode($content);
	
	$args = array(
		'posts_per_page'   => -1,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'testimonials',
		'post_status'      => 'publish'
	);

	$testimonials = get_posts( $args );

	if (sizeof($testimonials) <= 0) {
		$shortcode = '<span class="sola_t_gutenberg_preview_icon dashicons dashicons-format-quote"></span>';
	}

	wp_localize_script( 'sola_t_all_testimonials', 'testimonial_content', $shortcode );

	// Styles
	wp_enqueue_style( 'sola_t_all_testimonials_editor',
		plugins_url( 'editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
}

add_action( 'enqueue_block_assets', 'sola_t_all_testimonials_block_block_assets' );

function sola_t_all_testimonials_block_block_assets() {

	// User styles
	wp_enqueue_style( 'sola_t_all_testimonials_user',
		plugins_url( 'style.css', __FILE__ ),
		array( 'wp-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
	);
}
