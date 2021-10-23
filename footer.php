<footer class="site-footer">
	<!-- Footer content goes here -->
	<?php
    wp_nav_menu(
      array(
        'theme_location' => 'footer-menu',
        'container'		 	 => 'false'
      )
    );
	?>

	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'legal-menu',
				'container'		 	 => 'false'
			)
		);
	?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
