<section class="u-width--50 u-margin-right--30">
<h1 class="o-main-title u-padding-bottom--50"><?php echo get_the_title(52); ?></h1>
<?php
  $args = array (
    'post_type' => 'testimonial',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $query = new WP_Query( $args );
  if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
?>
<article class="u-border-top u-padding-top--30 u-padding-bottom--15">

  <h3 class="u-text-green u-italic u-padding-bottom--30 u-bold"><?php edit_post_link(); ?>"<?php the_field('introduction');?>"</h3>
  <a href="<?php echo home_url()?>/testimonial/" class="u-font-size--12 u-uppercase u-underline u-bold">Read More</a>
</article>
<?php endwhile; endif; wp_reset_postdata(); ?>
<!-- <a href="<?php echo get_permalink(52); ?>" class="u-uppercase u-bold u-flex u-align-center">
  <?php echo get_the_title(52); ?>
  <img src="<?php echo home_url(); ?>/wp-content/themes/berkeley_place/img/green_link.png">

</a> -->
</section>
