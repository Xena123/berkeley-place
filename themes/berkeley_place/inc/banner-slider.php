 
  <!-- Begin Single Slider Section -->
  
  <section class="c-slider single-slider">
  
  <?php
    $args = array (
      'post_type' => 'slider',
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $slider = new WP_Query( $args );
    if ($slider->have_posts()) : while ($slider->have_posts()) : $slider->the_post();
  ?>

  <article class="">
    
    <div class="c-front-banner-bgd-img o-bg-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="u-overlay--light o-bgd-absolute"></div>
    <div class="c-header--overlay o-bgd-absolute"></div>
      <div class="o-content-block c-banner-overlay u-text-white u-background--dark">
        <h1 class="o-main-title u-padding-bottom--15"><?php the_title(); ?></h1>
        <div class="u-padding-bottom--15"><?php edit_post_link(); ?><?php the_content(); ?></div>
        <a href="<?php the_field('link');?>" class="u-bold u-flex--init u-flex-end c-banner-cta u-uppercase u-align-center">
          
          <div class="u-margin-right--30"><h6 class="u-text-white"><?php the_field('link_label'); ?></h6></div>
          <img src="<?php echo home_url(); ?>/wp-content/themes/berkeley_place/img/green_link.png">
        </a>
      </div>
    </div>
  </article>

  <?php endwhile; endif; wp_reset_postdata(); ?>

  </section>
	<!-- End Single Slider Section -->
