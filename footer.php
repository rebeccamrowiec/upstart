<footer class="site-footer">
	<section class="section section--footer site-footer__section site-footer__section--logos">
    <div class="container-fluid block-statement__container">
      <div class="row block-statement__row justify-content-center">
        <div class="col-12 col-lg-10 site-footer__col site-footer__col--logos">
					<img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/webbox.svg" />
					<img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/natwest.png" />
					<img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/darwin.png" /> 
        </div>
      </div>
    </div>
  </section>

	<section class="section section--footer site-footer__section site-footer__section--main">
    <div class="container-fluid block-statement__container">
      <div class="row block-statement__row justify-content-center">
        <div class="col-12 site-footer__col">
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
        </div>
      </div>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>

</body>
</html>
