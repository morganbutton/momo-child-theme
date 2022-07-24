<?php

	function tnt_enqueue_parent_styles() {
	   $parent_style = 'twentynineteen-style';
	   wp_enqueue_style( $parent_style, get_template_directory_uri().'/style.css' );
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css', 		         array($parent_style),wp_get_theme()->get('Version') );
	}
	add_action( 'wp_enqueue_scripts', 'tnt_enqueue_parent_styles' );

function jawn_test_grid() {
	$args = array(
		'post_type'			=> 'Post',
		'posts_per_page'	=> 3
	);
	$q = new WP_Query($args);
	$html = '<div class="test-grid">';
	while ($q->have_posts()) {
		$q->the_post();
		$html .= '<h5>' . get_the_title() . '</h5>';
	}
	$html .= '</div>';
	wp_reset_postdata();

	return $html;
}
add_shortcode('test-grid','jawn_test_grid');








?>
