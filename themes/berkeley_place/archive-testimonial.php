<!-- archive-testimonial.php -->
<?php get_header(); ?>

<?php get_template_part('inc/banner-fixed'); ?>

<main class="o-wrap--padding-100 o-wrap-pull-up">
  <h1 class="o-main-title u-text-white u-padding-bottom--50"><?php echo get_the_title(52); ?></h1>
  <section class="u-background--white">
    <aside class="o-sidebar--sml">
      <nav class="c-top-black c-sidebar-nav u-background--grey">
        <?php
          $args = array(
            'menu' => 'Case Studies Menu',
            'theme_location' => 'casestudies-menu',
            'container' => '',
            'menu_class' => 'u-flex--init u-flex-column u-text-white',
            'menu_id' => '',
            'depth' => 0
          );
          wp_nav_menu( $args );
        ?>
      </nav>
      <div class="c-below-sidebar-widget-2 u-margin-top--15 u-margin-bottom--15">
        <?php dynamic_sidebar( 'below_sidebar_widget_2' ); ?>
      </div>
    </aside>
    
   
  
    <article class="o-main-content--lg">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="u-padding-bottom--30 u-border-bottom u-margin-bottom--30">
      <header class="u-flex u-flex-space-between">
        <div class="u-padding-bottom--30">
          <div class=""><?php the_field('author'); ?></div>
          <?php if( get_field('company') ): ?>
          <div class=""><?php the_field('company'); ?></div>
          <?php endif; ?>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="c-archive-icon o-bg-icon" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
        <?php else: ?>
        <div class="c-archive-icon" style="display: none;"></div>
        <?php endif; ?>
      </header>
      <p class=""><h3>"<?php the_field('introduction'); ?>"</h3></p>
       <?php edit_post_link(); ?><?php the_content(); ?>
      </div>
      
      <?php endwhile; endif; wp_reset_postdata(); ?>
      <div id="pagination" class="clearfix">
        <?php posts_nav_link(); ?>
      </div>
    </article>
    

  </section>
</main>   
<?php get_footer(); ?>