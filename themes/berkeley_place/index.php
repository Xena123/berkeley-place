<!-- index.php -->

<?php get_header(); ?>
  <?php get_template_part('inc/banner-fixed'); ?>

  <main class="o-wrap--padding-100 o-wrap-pull-up">
    <h1 class="o-main-title u-text-white u-padding-bottom--50"><?php edit_post_link(); ?><?php the_title(); ?></h1>
    <section class="u-background--white o-main-content--no-sidebar">
      <article class="o-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; endif; wp_reset_postdata(); ?>
      </article>
    </section>

  </main>

<?php get_footer(); ?>
