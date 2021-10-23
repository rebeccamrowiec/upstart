<?php
// The Block
$groupName = 'block_group_text_with_image';

// If have rows
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

$text = get_sub_field('text');
$image = get_sub_field('image'); ?>

	<!-- Block: Text With Image -->
	<section class="section section--block-text-with-image block-text-with-image__section">
    <div class="container-fluid block-text-with-image__container">
      <div class="row block-text-with-image__row justify-content-evenly align-items-center">
        <div class="col-12 col-lg-4 block-text-with-image__col">
          <div class="block-text-with-image__info-container">
            <img class="block-text-with-image__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/curly-arrow.svg" />
            <div class="block-text-with-image__info-wrapper">
              <?php echo $text; ?>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-5 block-text-with-image__col">
          <div class="block-text-with-image__image-wrapper">
            <!-- <div class="overlay overlay--border"></div> -->
            <img class="block-text-with-image__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          </div>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; endif; ?>