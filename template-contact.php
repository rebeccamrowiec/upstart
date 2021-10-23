<?php
/* Template Name: Contact */ 

get_header();
?>

	<main id="primary" class="site-main">
		<?php 
		$email = get_field('email', 'options'); // TEXT
		$phone = get_field('phone', 'options'); // TEXT
		$address = get_field('address', 'options'); // WYS ?>
	</main>

<?php
get_footer();