<!-- archive-our-work.php -->
<?php get_header(); ?>

<?php get_template_part('inc/banner-fixed'); ?>

<main class="o-wrap--padding-100 o-wrap-pull-up">
  <h1 class="o-main-title u-text-white u-padding-bottom--50">Our Work</h1>
  <section class="">
    <aside class="o-sidebar--sml">
    
      <div class="c-above-sidebar-widget o-content-block u-background--green u-margin-bottom--15">
        <?php dynamic_sidebar( 'above_sidebar_widget' ); ?>
      </div>
      <nav class="button-group filters-button-group c-dark-sidebar-nav c-sidebar-nav u-background--dark-grey">
        <?php
          $terms = get_terms([
          'taxonomy' => 'filter',
          'hide_empty' => false,
          ]);
          foreach ( $terms as $term ) {
              $term_link = get_term_link( $term );
              echo '<button data-filter=".' . $term->slug . '">' . $term->name . '</button>';
          }
        ?>
      </nav>
      
      <div class="c-below-sidebar-widget o-content-block u-margin-bottom--15">
        <?php dynamic_sidebar( 'below_sidebar_widget_1' ); ?>
      </div>
    </aside>
    <article class="o-main-content--lg-no-pad">
      <div class="u-flex--600 u-flex-wrap grid">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $filters = wp_get_post_terms( $post->ID, 'filter' ); ?>

        <a href="<?php the_post_thumbnail_url();?>" class="<?php foreach( $filters as $filter ) { echo $filter->slug . ' '; } ?> element-item u-box-height-230 u-overflow-hidden u-width--25 gallery u-margin-bottom--15" data-lightbox="our-work"><div class="o-bg-img c-our-work--bg" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
          <img class="c-our-work--img" src="<?php the_post_thumbnail(); ?>
        </a>

        <?php endwhile; endif; wp_reset_postdata(); ?>

      </div>
      <div id="pagination" class="clearfix">
      <?php posts_nav_link(); ?>
      </div>
    </article>
  </section>
</main>

<?php get_footer(); ?>

