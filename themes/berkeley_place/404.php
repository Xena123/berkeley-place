<!-- 404.php -->

<?php get_header(); ?>
  <?php get_template_part('inc/banner-fixed'); ?>

  <main class="o-wrap--padding-100 o-wrap-pull-up u-min-height-100">
    <h1 class="o-main-title u-text-white u-padding-bottom--50"><?php edit_post_link(); ?><?php the_title(); ?></h1>
    <section class="u-background--white o-main-content--no-sidebar">
      <article>
        <h1 class="u-text-green u-bold u-padding-bottom--15">404 Page not Found</h1>
        <h2 class="u-padding-bottom--15">This is somewhat embarrassing, isn’t it?</h2>
        <h2 class="u-padding-bottom--15">It looks like nothing was found at this location. Maybe try a search?</h2>
        <h2 class="u-padding-bottom--15">Please check your URL or return to the <a href="<?php echo home_url();?>" class="u-text-green u-bold u-font-size--26">Home Page</a></h2>
      </article>
    </section>

  </main>

<?php get_footer(); ?>
