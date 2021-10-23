<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rwbp
 */

get_header();
?>

	<main>
		<!-- Listing -->
		<?php get_template_part('partials/archive/listing'); ?>
	</main>

<?php
get_footer();