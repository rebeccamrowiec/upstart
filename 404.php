<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rwbp
 */

get_header(); ?>

		<main>
			<section class="error-404">
				<div class="error-404__wrapper">
					<h1>Error 404</h1>
					<h3>The page you are looking for could not be found</h3>
					<a href="<?php echo get_site_url() ?>">Return to the homepage</a>
				</div>
			</section>
		</main>

	</body>
</html>