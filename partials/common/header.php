<header class="site-header">
<div class="site-header__bar-container">
    <a class="site-header__logo-link" href="<?php echo get_site_url() ?>">
      <img class="site-header__logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.svg" alt="" />
    </a>
  
    <div class="site-header__hamburger-container" data-action="toggle-nav">
      <div class="site-header__hamburger-wrapper">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <div id="site-navigation" class="site-header__nav" data-base="<?php echo get_template_directory_uri(); ?>">
    <nav-pane class="top">
      <pane-content>

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

      </pane-content>
    </nav-pane>

    <div class="socials socials--header">
      <?php get_template_part('partials/common/socials'); ?>
    </div>
  </div>
</header>