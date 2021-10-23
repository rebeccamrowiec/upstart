<?php
// Setup Pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
  'post_status' => 'publish',
  'paged' => $paged,
  'posts_per_page' => 12
);

$loop = new WP_Query( $args );

if ( $loop->have_posts() ) : ?>

  <section>

    <?php while ( $loop->have_posts() ) :
      $loop->the_post();
      
      get_template_part('partials/archive/card'); ?>

    <?php endwhile; ?>

  </section>

  <?php 
  $total_pages = $loop->max_num_pages;
  if ( $total_pages > 1 ) { ?>

    <!-- Pagination -->
		<section class="pagination">
				<?php
        $current_page = max(1, get_query_var('paged'));

				// Output the Pagination
        echo paginate_links(array(
          'base' => preg_replace('/\?.*/', '', get_pagenum_link(1)) . '%_%',
          'format' => 'page/%#%',
          'current' => $current_page,
          'total' => $total_pages,
          'prev_text'    => 'Previous',
          'next_text'    => 'Next',
          'type' => 'list'
        ));
				?>
		</section>

	<?php }

endif;
wp_reset_postdata(); ?>