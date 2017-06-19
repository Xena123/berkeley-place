<?php
$url_1 = get_field('link_1');
$postid_1 = url_to_postid( $url_1 );
$img_1 = get_the_post_thumbnail_url($postid_1);
$intro_1 = get_field('introduction', $postid_1);
$link_1 = get_permalink($postid_1);

$url_2 = get_field('link_2');
$postid_2 = url_to_postid( $url_2);
$img_2 = get_the_post_thumbnail_url($postid_2);
$intro_2 = get_field('introduction', $postid_2);
$link_2 = get_permalink($postid_2);

$url_3 = get_field('link_3');
$postid_3 = url_to_postid( $url_3 );
$img_3 = get_the_post_thumbnail_url($postid_3);
$intro_3 = get_field('introduction', $postid_3);
$link_3 = get_permalink($postid_3);

?>
<section>
  <h1 class="o-main-title u-text-center u-padding-bottom--40">Why Us?</h1>
  <div class="u-flex c-front-grid">

  <article id="box" class="u-width--33 u-relative u-text-white u-margin-right--15">

    <div class="o-background u-overlay--dark"></div>
    <div class="c-bg-grid-img o-bg-img" style="background-image: url('<?php echo $img_1; ?>');">
      <h2 class="c-grid-title c-header-position o-text-overlay"><?php the_field('title_1'); ?></h2>
      <div id="overlay" class="o-background u-relative o-bgd-absolute u-background--dark--transparent">
        <div class="c-front-hover-position">
          <p><?php echo $intro_1; ?></p>
          <a href="<?php echo $link_1 ?>" class="u-display-block"><img src="<?php echo home_url(); ?>/wp-content/themes/berkeley_place/img/green_link.png"></a>

        </div>
      </div>
    </div>

  </article>

  <article id="box" class="u-width--33 u-relative u-text-white u-margin-right--15">

    <div class="o-background u-overlay--dark"></div>
    <div class="c-bg-grid-img o-bg-img" style="background-image: url('<?php echo $img_2; ?>');">
      <h2 class="c-grid-title c-header-position o-text-overlay"><?php the_field('title_2'); ?></h2>
      <div id="overlay" class="o-background u-relative o-bgd-absolute u-background--dark--transparent">
        <div class="c-front-hover-position">
          <p><?php echo $intro_2; ?></p>
          <a href="<?php echo $link_2 ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/berkeley_place/img/green_link.png"></a>
        </div>
      </div>
    </div>

  </article>

  <article id="box" class="u-width--33 u-relative u-text-white u-margin--0">

    <div class="o-background u-overlay--dark"></div>
    <div class="c-bg-grid-img o-bg-img" style="background-image: url('<?php echo $img_3; ?>');">
      <h2 class="c-grid-title c-header-position o-text-overlay"><?php the_field('title_3'); ?></h2>
      <div id="overlay" class="o-background u-relative o-bgd-absolute u-background--dark--transparent">
        <div class="c-front-hover-position">
          <p><?php echo $intro_3; ?></p>
          <a href="<?php echo $link_3 ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/berkeley_place/img/green_link.png"></a>
        </div>
      </div>
    </div>

  </article>
  </div>
</section>
