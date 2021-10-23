<?php
$home_hero_title = get_field('home_hero_title'); // TEXT AREA
$home_hero_image = get_field('home_hero_image'); // IMAGE ARR

?>

<!-- Block: Homepage Hero -->
<div class="home-hero">
  <!-- <img class="home-hero__mask" src="<?php echo get_template_directory_uri(); ?>/assets/images/masks/arrow-mask-desktop.svg" /> -->

  <section class="section section--home-hero home-hero__section">
    <div class="container-fluid home-hero__container">
      <div class="row home-hero__row justify-content-center">
        <div class="col-12 col-lg-10 home-hero__col">
          <div class="home-hero__info-container">
            <div class="home-hero__info-wrapper">
              <h1 class="home-hero__title"><?php echo $home_hero_title; ?></h1>
              <!-- <div class="socials socials--header"> -->
              <?php get_template_part('partials/common/socials'); ?>
              <!-- </div> -->
            </div>

            <div class="home-hero__image-wrapper">
              <div class="overlay overlay--border"></div>
              <img class="home-hero__image" src="<?php echo esc_url($home_hero_image['url']); ?>" alt="<?php echo esc_attr($home_hero_image['alt']); ?>" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>