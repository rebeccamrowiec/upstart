<header class="site-header">
  <div class="site-header__outer-section">
    <section class="section section--site-header site-header__inner-section">
      <div class="container-fluid site-header__container">
        <div class="row site-header__row justify-content-center">
          <div class="col-12 site-header__col">
            <div class="site-header__bar-container">
              <a class="site-header__logo-link" href="<?php echo get_site_url() ?>">
                <img class="site-header__logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo.svg" alt="" />
              </a>
            
              <div class="site-header__hamburger-container" data-action="toggle-nav">
                <div class="site-header__hamburger-wrapper">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>



  <div id="site-navigation" class="site-header__nav" data-base="<?php echo get_template_directory_uri(); ?>">
    <nav-pane class="top">
      <pane-content class="section section--site-header site-header__pane-content">


        <div class="container-fluid site-header__container">
          <div class="row site-header__row justify-content-center">
            <div class="col-12 site-header__col">



              <!-- Top level nav -->
              <nav class="top-level">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'header-menu',
                    'container'		 	 => 'false'
                  )
                );
                ?>
              </nav>



            </div>
          </div>
        </div>


      </pane-content>
    </nav-pane>
  </div>
</header>