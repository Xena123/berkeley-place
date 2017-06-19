<!-- single-case_studies.php -->
<?php get_header(); ?>

<?php get_template_part('inc/banner-fixed'); ?>
<?php 
$testimonial = get_field('testimonial'); 
?>
<main class="o-wrap--padding-100 o-wrap-pull-up">
  <h1 class="o-main-title u-text-white u-padding-bottom--50"><?php echo get_the_title(52); ?></h1>
  <section class="u-background--white">
    <aside class="o-sidebar--sml">
      <nav class="c-top-black c-sidebar-nav u-background--dark-grey">
        <?php
          $args = array(
            'menu' => 'Case Studies Menu',
            'theme_location' => 'casestudies_menu',
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
      <?php if ( has_post_thumbnail() ) : ?>
      <div class="c-featured-img o-bg-img o-featured-bg-img" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
      <?php else: ?>
      <div class="c-featured-img" style="display: none;"></div>
      <?php endif; ?>
      <div class="o-content">
        <?php the_content(); ?>
      </div>

      <div class="u-flex <?php if(empty($testimonial)) { echo 'u-display-none';} ?>">
        <img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/quote.jpg" class="u-padding-right--35">
        <div>
        <h3 class="u-text-green"><?php the_field('testimonial_title'); ?></h3>
        <p>"<?php the_field('testimonial'); ?>"</p>
        </div>
      </div>
    </article>
    <?php endwhile; endif; wp_reset_postdata(); ?>

  </section>
</main>   
<?php get_footer(); ?>