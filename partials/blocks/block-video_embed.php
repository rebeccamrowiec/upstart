<!-- THE BLOCK  -->
<?php	$groupName = 'block_group_video_embed';

// IF HAVE ROWS
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

  $width = get_sub_field('width'); // SELECT

  if ($width == "half") {
  } else if ($width == "full") {
  }

	$embed = get_sub_field('embed'); // oEMBED ?>

	<!-- Block: Video Embed -->
	<section class="block-video-embed">
    <?php echo $embed; ?>
	</section>

<?php endwhile; endif; ?>