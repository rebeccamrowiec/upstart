<?php
// The Block
$groupName = 'block_group_news_slider';

// If have rows
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

  $title = get_sub_field('title');

	// Block: News Slider
  $args = array(
    'post_status' => 'publish',
    'posts_per_page' => 7
    // 12
  );

  $posts = query_posts( $args );

  if ( have_posts() ) : ?>

	<section class="section section--footer block-news-slider__section">
    <div class="container-fluid block-news-slider__container">
      <div class="row block-news-slider__row justify-content-center">
        <div class="col-12 col-lg-10 block-news-slider__col">
					<h2><?php echo $title; ?></h2>
        </div>
      </div>

      <div class="row block-news-slider__row justify-content-center">
        <div class="col-12 col-lg-10 block-news-slider__col">
					<div class="block-news-slider__slider-container">
            <div class="block-news-slider__slider">

                <?php while ( have_posts() ) :
                  the_post();

                  $image = get_the_post_thumbnail_url($post->ID);
                  $card_title = get_the_title($post->ID);
                  $date = get_the_date($post->ID);
                  $intro = get_the_excerpt($post->ID);
                  $link = get_permalink($post->ID); ?>

                  <div class="block-news-slider__info-container">
                    <a class="block-news-slider__image-wrapper" href="<?php echo $link; ?>">
                      <img class="block-news-slider__image" src="<?php echo $image; ?>" />
                    </a>
      
                    <div class="block-news-slider__info-wrapper">
                      <h6><?php echo $date; ?></h6>
                      <h3 class="block-news-slider__date"><?php echo $card_title; ?></h3>
                      <p class="block-news-slider__intro"><?php echo $intro; ?></p>
                      <a class="button" href="<?php echo $link; ?>">Read More</a> 
                    </div>
                  </div>

                <?php endwhile; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endif;
  wp_reset_query();

endwhile; endif; ?>