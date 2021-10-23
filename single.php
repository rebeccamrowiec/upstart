<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rwbp
 */

get_header();

		if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); ?>
	
				<main>
					<!-- Post content goes here -->
				</main>

			<?php endwhile; 
		endif;

get_footer(); ?>
