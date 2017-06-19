<!-- front-page.php -->

<?php get_header(); ?>

<header class="o-wrap--full-width">
		<?php get_template_part('inc/banner-slider'); ?>
</header>
<main class="o-wrap--padding-100">
<section class="u-max-width--600">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <div class="c-front-intro u-padding-bottom--50 u-padding-top--20"><?php edit_post_link(); ?><?php the_content(); ?></div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</section>
<section class="u-flex--600 u-padding-bottom--60">
  <div class="u-flex--init u-flex-column u-flex-space-between c-insta-cta u-width--18 u-background--green u-text-white o-content-block">
    <?php the_field('find_us'); ?>
    <div><img src="wp-content/themes/berkeley_place/img/arrow_right.png"></div>
  </div>

  <div id="instafeed" class="u-flex u-flex-space-between u-width--80"></div>
  </div>
</section>
  <?php get_template_part('inc/front_grid-section'); ?>
<section class="u-flex o-content-block-wrap">
  <?php get_template_part('inc/front_testimonial-block'); ?>
  <?php get_template_part('inc/front_news-block'); ?>
</section>
</main>

<?php get_footer(); ?>
