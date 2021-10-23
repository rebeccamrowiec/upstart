<?php
// The Block
$groupName = 'block_group_statement';

// If have rows
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

$text = get_sub_field('text'); ?>

	<!-- Block: Statement -->
	<section class="section section--block-statement block-statement__section">
    <div class="container-fluid block-statement__container">
      <div class="row block-statement__row justify-content-center">
        <div class="col-12 col-lg-6 block-statement__col">
					<h3><?php echo $text; ?></h3>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; endif; ?>