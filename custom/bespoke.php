<?php
// Flex blocks
function rwbp_flex_master(){
	$blocks_location  = '';

	if ( have_rows( 'page_blocks', $blocks_location) ):
		while ( have_rows( 'page_blocks', $blocks_location) ) : the_row();
			$template = str_replace('layout_','',get_row_layout());

			get_template_part( 'partials/blocks/block', $template );

			wp_reset_query();
			wp_reset_postdata();

		endwhile;
	endif;
}

// ACF Options
if( function_exists('acf_add_options_page') ) {
	// Generic
	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'rwbp-theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	// Blog
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog',
		'menu_title'	=> 'Blog',
		'parent_slug'	=> 'rwbp-theme-options',
	));

	// Contact Details
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Details',
		'menu_title'	=> 'Contact Details',
		'parent_slug'	=> 'rwbp-theme-options',
	));

	// Socials
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Socials',
		'menu_title'	=> 'Socials',
		'parent_slug'	=> 'rwbp-theme-options',
	));
}
?>