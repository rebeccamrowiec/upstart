<?php
// The Block
$groupName = 'block_group_events_listing';

// If have rows
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

  $text = get_sub_field('text');
  $events = get_sub_field('events'); // POST OBJECT

	// Block: Events Listing
  $args = array(
    'post_status' => 'publish',
    'posts_per_page' => 3
  );

  $posts = query_posts( $args );

  if ( have_posts() ) : ?>

    <section class="section section--block-events-listing block-events-listing__section">
      <div class="container-fluid block-events-listing__container">
        <div class="row block-events-listing__row justify-content-center">

        <?php while ( have_posts() ) :
          the_post();
          
          the_permalink();
          the_title();
          the_post_thumbnail_url(); ?>

          <div class="col-12 col-lg-6 block-events-listing__col">
            <h3><?php echo $text; ?></h3>
          </div>

        <?php endwhile; ?>

        </div>
      </div>
    </section>

  <?php endif;
  wp_reset_query();

endwhile; endif; ?>