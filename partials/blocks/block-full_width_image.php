<!-- THE BLOCK  -->
<?php	$groupName = 'block_group_full_width_image';

// IF HAVE ROWS
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

  $image = get_sub_field('image'); // IMAGE ARR ?>

	<!-- Block: Full Width Image -->
	<section>
	</section>

<?php endwhile; endif; ?>