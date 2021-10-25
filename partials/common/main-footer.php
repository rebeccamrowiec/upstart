<section class="section section--footer site-footer__section site-footer__section--main">
  <div class="container-fluid site-footer__container">
    <div class="row site-footer__row site-footer__row--menu justify-content-center">
      <div class="col-12 col-lg-6 site-footer__col site-footer__col--main-top">
        <img class="site-footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo.svg" alt="" />
        <p class="site-footer__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        
        <?php get_template_part('partials/common/socials'); ?>
      </div>

      <div class="col-12 col-lg-6 site-footer__col site-footer__col--menu">
        <h5 class="site-footer__menu-title">Company</h5>

        <div class="site-footer__menu-container">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer-menu',
              'container'		 	 => '',
              'menu_class'     => 'site-footer__menu-wrapper'
            )
          );
          ?>

          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'legal-menu',
              'container'		 	 => '',
              'menu_class'     => 'site-footer__menu-wrapper'
            )
          );
          ?>
        </div>
      </div>
    </div>



    <div class="row site-footer__row justify-content-center">
      <div class="col-12 col-lg-6 site-footer__col site-footer__col--copyright">
        <?php get_template_part('partials/common/socials'); ?>
        <span class="site-footer__copyright">© Lorem ipsum dolor sit amet</span>
      </div>

      <div class="col-12 col-lg-6 site-footer__col site-footer__col--item">
        <span class="site-footer__item">Lorem ipsum dolor</span>
        <span class="site-footer__item">Lorem ipsum dolor</span>
        <span class="site-footer__item">Lorem ipsum dolor</span>
      </div>
    </div>
  </div>
</section>