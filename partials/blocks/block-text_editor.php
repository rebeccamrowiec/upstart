<?php
	// The Block
	$groupName = 'block_group_text_editor';

	// If have rows
	if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

	$content = get_sub_field('content');
?>

	<!-- Block: Text Editor -->
	<section class="block-text-editor">
    <?php echo $content; ?>
	</section>

<?php endwhile; endif; ?>