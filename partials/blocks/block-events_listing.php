<?php
// The Block
$groupName = 'block_group_events_listing';

// If have rows
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

  $title = get_sub_field('title');

  $cta = get_sub_field('cta'); // LINK

  if ($cta) {
    $cta_url = $cta['url'];
    $cta_title = $cta['title'];
    $cta_target = $cta['target'] ? $cta['target'] : '_self'; 
  }

	// Block: Events Listing
  $args = array(
    'post_type' => 'event',
    'post_status' => 'publish',
    'posts_per_page' => 6
  );

  $posts = query_posts( $args );

  if ( have_posts() ) : ?>

    <div class="block-events-listing">
      <section class="section section--block-events-listing block-events-listing__section">
        <div class="container-fluid block-events-listing__container">
          <div class="row block-events-listing__row justify-content-center">
            <div class="col-12 col-lg-10 block-events-listing__col">
              <h2 class="block-events-listing__title"><?php echo $title; ?></h2>
            </div>
          </div>

          <div class="row block-events-listing__row justify-content-center">

            <?php while ( have_posts() ) :
              the_post();

              $image = get_the_post_thumbnail_url($post->ID);
              $intro = get_the_excerpt($post->ID);
              $link = get_permalink($post->ID); 
              $date = get_field( 'event_date', $post->ID ); // DATE PICKER ?>

              <div class="col-12 col-lg-5 block-events-listing__col block-events-listing__col--card">
                <div class="block-events-listing__info-container">
                  <a class="block-events-listing__image-wrapper" href="<?php echo $link; ?>">
                    <img class="block-events-listing__image" src="<?php echo $image; ?>" />
                  </a>
    
                  <div class="block-events-listing__info-wrapper">
                    <h3 class="block-events-listing__date"><?php if ($date) { echo $date; } else { echo "TBC"; } ?></h3>
                    <p class="block-events-listing__intro"><?php echo $intro; ?></p>
                    <a class="button" href="<?php echo $link; ?>"><span>Find Out More</span></a> 
                  </div>
                </div>
              </div>

            <?php endwhile; ?>

          </div>

          <div class="row block-events-listing__row justify-content-center">
            <div class="col-12 col-lg-10 block-events-listing__col">
              <a class="button" href="<?php echo $cta_url ?>" target="<?php echo $cta_target ?>"><span><?php echo $cta_title ?></span></a>
            </div>
          </div>
        </div>
      </section>
    </div>

  <?php endif;
  wp_reset_query();

endwhile; endif; ?>