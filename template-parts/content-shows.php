<?php
// Show Variables

?>

<!--SHOWS-->
<section id="shows">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-header">
        <h2>Shows</h2>

        <?php $loop = new WP_Query(array('post_type' => 'show',
          'orderby' => 'post_date' , 'order' => 'DESC')); ?>


        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="row show">
            <div class="col-sm-6">
              <?php  if (  has_post_thumbnail() ) {//check for post image
                     the_post_thumbnail( array(200,200) );
                  }
              ?>
            </div>
            <div class="col-sm-4">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
              <span id="show-date-time"><?php  $date = DateTime::createFromFormat('dmY', get_field('show_date')); echo $date->format('D jS F Y'); ?>, <?php the_field('show_time'); ?></br></span>
              <span>
              <a href="<?php esc_url(the_field('get_directions')); ?>">Get Directions</a>
              -
              <a href="<?php esc_url(the_field('event_page')); ?>">Event Page</a>
              </span>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </div>
</section>
