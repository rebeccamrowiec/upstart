<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rwbp
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Default page content goes here -->
		<!-- Hero -->
		<?php get_template_part( '/partials/common/hero' ); ?>

		<!-- Flex Blocks -->
		<?php rwbp_flex_master(); ?>
	</main>

<?php
get_footer();