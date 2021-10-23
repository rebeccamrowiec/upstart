<?php
/**
 * The template for displaying the homepage
 */

get_header();
?>

<main>
	<!-- Hero -->
	<?php get_template_part( '/partials/home/hero' ); ?>

	<!-- Flex Blocks -->
	<?php rwbp_flex_master(); ?>
</main>

<?php
get_footer();
?>