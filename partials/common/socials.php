<?php if( have_rows('social_links', 'options') ): ?>

<div class="socials__container">

  <?php while ( have_rows('social_links', 'options') ) : the_row();

    $url = get_sub_field('url'); // URL
    $type = get_sub_field('type'); // SELECT 
    
    if ($type == "fb") {
      $src = "fb.svg";
    } else if ($type == "twitter") {
      $src = "twitter.svg";
    } else if ($type == "insta") {
      $src = "insta.svg";
    } else if ($type == "linkedin") {
      $src = "linkedin.svg";
    }
    ?>

    <a class="socials__link" href="<?php echo $url; ?>" target="_blank">
      <img class="socials__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $src; ?>" alt="social-icon" />
    </a>

  <?php endwhile; ?>

</div>

<?php endif; ?>