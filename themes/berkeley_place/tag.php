<!-- tag.php -->
<?php get_header(); ?>

<?php get_template_part('inc/banner-fixed'); ?>

<main class="o-wrap--padding-100 o-wrap-pull-up">
  <h1 class="u-text-white u-padding-bottom--50">Our Work</h1>
  <section class="">
    <aside class="o-sidebar--sml">
      <div class="c-above-sidebar-widget o-content-block u-background--green u-margin-bottom--15">
        <?php dynamic_sidebar( 'above_sidebar_widget' ); ?>
      </div>
      <nav class="c-dark-sidebar-nav c-sidebar-nav u-background--grey">
        <?php
            $args = array(
              'menu' => 'Our Work Menu',
              'theme_location' => 'our-work-menu',
              'container' => '',
              'menu_class' => 'u-flex--init u-flex-column u-text-white',
              'menu_id' => '',
              'depth' => 0
            );
            wp_nav_menu( $args );
          ?>
      </nav>
      <div class="c-below-sidebar-widget o-content-block u-margin-bottom--15">
        <?php dynamic_sidebar( 'below_sidebar_widget_1' ); ?>
      </div>
    </aside>
    <article class="o-main-content--lg-no-pad">
    <div class="u-flex u-flex-wrap">
    <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      global $query_string;
      $posts = query_posts($query_string.'&post_type=our-work&posts_per_page=-1&paged=".$paged');
      if ( have_posts() ) while ( have_posts() ) : the_post(); 
    ?>

    <a href="<?php the_post_thumbnail_url();?>" class="u-box-height-230 u-overflow-hidden u-width--25 gallery u-margin-bottom--15" data-lightbox="our-work"><div class="o-bg-img c-our-work--bg" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
          <img class="c-our-work--img" src="<?php the_post_thumbnail(); ?>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>
       
  
      </div>
      <div id="pagination" class="clearfix">
      <?php posts_nav_link(); ?>
      </div>
    </div>

    </div>
    </article>
  </section>
</main>

<?php get_footer(); ?>
