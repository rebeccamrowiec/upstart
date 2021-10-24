<?php
// The Block
$groupName = 'block_group_news_slider';

// If have rows
if ( have_rows( $groupName ) ) : while ( have_rows( $groupName) ) : the_row();

$title = get_sub_field('title'); ?>

	<!-- Block: News Slider -->
	<section class="section section--footer block-news-slider__section">
    <div class="container-fluid block-news-slider__container">
      <div class="row block-news-slider__row justify-content-center">
        <div class="col-12 col-lg-10 block-news-slider__col">
					<h2><?php echo $title; ?></h2>
        </div>
      </div>

      <div class="row block-news-slider__row justify-content-center">
        <div class="col-12 col-lg-10 block-news-slider__col">
					<div class="block-news-slider__slider">

          </div>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; endif; ?>