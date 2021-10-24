<?php
// The Block
$groupName = 'block_group_quote_slider';

// If have rows
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

  $title = get_sub_field('title');

	// Block: Quote Slider
  if( have_rows('quotes') ):
  ?>

	<section class="section section--footer block-quote-slider__section">
    <div class="container-fluid block-quote-slider__container">
      <!-- <div class="row block-quote-slider__row justify-content-center">
        <div class="col-12 col-lg-6 block-quote-slider__col">
        </div>
      </div> -->

      <div class="row block-quote-slider__row justify-content-center">
        <div class="col-12 col-lg-6 block-quote-slider__col">
          <!-- <div class="block-quote-slider__slider-container"> -->
            <div class="block-quote-slider__slider">

                <?php while ( have_rows('quotes') ) : the_row();                   
                  
                  $quote = get_sub_field('quote'); // WYS
                  $image = get_sub_field('image'); // IMAGE ARR - OPT
                  $name = get_sub_field('name'); // TEXT - OPT
                  $title = get_sub_field('title'); // TEXT - OPT
                  ?>

                  <div class="block-quote-slider__outer-info-container">
                    <div class="block-quote-slider__inner-info-container">
                      <div class="block-quote-slider__image-wrapper">
                        <img class="block-quote-slider__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </div>
        
                      <div class="block-quote-slider__info-wrapper">
                        <div class="block-quote-slider__text">
                          <?php echo $quote; ?>
                        </div>

                        <h6 class="block-quote-slider__name"><?php echo $name; ?></h6>
                        <h6 class="block-quote-slider__title"><?php echo $title; ?></h6>
                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>

            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </section>

  <?php endif;
  wp_reset_query();

endwhile; endif; ?>