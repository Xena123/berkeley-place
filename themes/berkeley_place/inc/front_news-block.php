
<article class="u-width--50">
<h1 class="o-main-title u-padding-bottom--50">Latest News</h1>
  <?php
    $args = array (
      'post_type' => 'post',
      'posts_per_page' => 1,
    );

  // the query
  $the_query = new WP_Query( $args ); ?>

  <?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <div class="u-flex">
    <div class="u-background--dark-grey front-news_content u-width--50 o-content-block">
      <h2 class="u-lg-spacing u-lg-line-height o-main-title u-padding-bottom--40 u-uppercase"><?php edit_post_link(); ?><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
    <div class="o-bg-img c-front_news-img" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
  </div>

   <?php endwhile; endif; wp_reset_postdata(); ?>
</article>
