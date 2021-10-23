<?php	$groupName = 'block_group_accordion';

if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

  $title = get_sub_field('title'); // TEXT OPT.

  if( have_rows('accordion_rows') ): ?>

    <!-- Block: Accordion -->
    <section class="block-accordion">
      <?php if ($title) { ?>
        <h2 class="block-accordion__title"><?php echo $title; ?></h2>
      <?php }

      while ( have_rows('accordion_rows') ) : the_row(); 

        $accordion = get_sub_field('accordion'); // TEXT AREA
        $panel = get_sub_field('panel'); // WYS ?>

        <div class="block-accordion__container">
          <a class="block-accordion__accordion-wrapper">
            <h3 class="block-accordion__accordion"><?php echo $accordion ?></h3>
            <img class="block-accordion__icon" src="" alt="" />
          </a>

          <div class="block-accordion__panel-wrapper">
            <div class="block-accordion__panel">
              <?php echo $panel ?>
            </div>
          </div>
        </div>

      <?php endwhile; ?>

    </section>

  <?php endif; ?>

<?php endwhile; endif; ?>