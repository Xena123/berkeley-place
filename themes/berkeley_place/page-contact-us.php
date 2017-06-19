<!-- page-contact-us.php -->
<?php get_header(); ?>

<?php get_template_part('inc/banner-fixed'); ?>

<main class="o-wrap--padding-100 o-wrap-pull-up u-padding-bottom--50">
  <h1 class="o-main-title u-text-white u-padding-bottom--50"><?php edit_post_link(); ?><?php the_title();?></h1>
  <section class="u-flex u-flex-center u-max-width-600--850 u-margin-auto ">
    <div class="u-max-width--600 u-width--50 u-flex--init u-flex-column u-margin-right--15 u-margin-bottom--20">
      <article class="u-flex--init u-flex-column u-background--grey u-text-white o-content-block-lg-pad u-margin-bottom--20">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </article>
      <article>
        <!-- <div class="u-width--50--init u-background--white">
          <img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/best_of_houzz.jpg">
        </div>
        <div class="o-bg-img c-contact-img u-width--50--init" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div> -->

        <div id="map"></div>
      </article>
    </div>
    <article class="u-width--50">
      <?php echo do_shortcode('[ninja_form id=2]'); ?>
    </article>
  </section>
</main> 
<script>
  function initMap() {
    var uluru = {lat: 51.456471, lng: -2.608322};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: uluru,
      scrollwheel: false,
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });

  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDctEvEHddIHDeYfB5bKHLUK8rfo5ca6W8&callback=initMap">
</script>  
<?php get_footer(); ?>