<?php
/*
 * Template Name: Why Us
 */
?>
<!-- page-why-us.php -->
<?php get_header(); ?>

<?php get_template_part('inc/banner-fixed'); ?>

<main class="o-wrap--padding-100 o-wrap-pull-up">
  <h1 class="o-main-title u-text-white u-padding-bottom--50">Why Us</h1>
  <section class="u-background--white">
    <aside class="o-sidebar--sml">
      <nav class="c-dark-sidebar-nav c-sidebar-nav u-background--grey">
        <?php
          $args = array(
            'menu' => 'Why Us Menu',
            'theme_location' => '',
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
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="o-main-content--lg">
      <h1 class="u-padding-bottom--40"><?php edit_post_link(); ?><?php the_title(); ?></h1>
      <h3 class="u-padding--0"><?php the_field('introduction'); ?></h3>
      <?php if( get_field('banner_image') ): ?>
      <div class="u-margin-top--40 o-bg-img o-featured-bg-img" style="background-image: url('<?php the_field('banner_image');?>');"></div>
      <?php endif; ?>
      <div class="o-content">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile; endif; wp_reset_postdata(); ?>

  </section>
</main>   
<?php get_footer(); ?>