<?php

//Fanatic Setup
	if ( ! function_exists('fanatic_setup') ) {
		function fanatic_setup() {
			//Add Theme Support
			add_theme_support( 'html5' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );
			/* Theme Menus */
			register_nav_menus(
				array(

					'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'casestudies-menu' => __('Case Studies Menu', 'html5blank'), 
        'work-menu' => __('Our Work Menu', 'html5blank') 
				)
			);
		}
	}
	add_action( 'after_setup_theme', 'fanatic_setup' );

/* Initialize widgets */
	function fanatic_widgets_init() {
		 register_sidebar(array(
        'name' => __('Header Widget', 'html5blank'),
        'description' => __('Header area widgets', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Above Sidebar Widget', 'html5blank'),
        'description' => __('', 'html5blank'),
        'id' => 'above_sidebar_widget',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Below Sidebar Widget 1', 'html5blank'),
        'description' => __('', 'html5blank'),
        'id' => 'below_sidebar_widget_1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Below Sidebar Widget 2', 'html5blank'),
        'description' => __('', 'html5blank'),
        'id' => 'below_sidebar_widget_2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget', 'html5blank'),
        'description' => __('Footer area widgets', 'html5blank'),
        'id' => 'footer_widget',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
	add_action( 'widgets_init', 'fanatic_widgets_init' );



// Include CSS & JS files
	function fanatic_scripts() {
		// get google CDN jQuery rather than local copy
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js' , array() , '3.1.0', false);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js' , array() , '1.2.1', false);
		// Theme Styles
		
	wp_enqueue_style( 'slick-style', get_template_directory_uri().'/lib/plugins/slick/slick.css' );
    wp_enqueue_style( 'slick-theme-style', get_template_directory_uri().'/lib/plugins/slick/slick-theme.css' );
    wp_enqueue_style( 'lightbox-style', get_template_directory_uri().'/lib/plugins/lightbox/css/lightbox.css' );
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/style.css' );
		// Fonts
		wp_enqueue_style( 'font-style', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,900' );
		// Theme Scripts
		
		wp_enqueue_script( 'slick-scripts', get_template_directory_uri().'/lib/plugins/slick/slick.min.js');
    wp_enqueue_script( 'isotope-scripts', get_template_directory_uri().'/lib/plugins/isotope/isotope.pkgd.js');
    wp_enqueue_script( 'instafeed', get_template_directory_uri().'/lib/plugins/instafeed/instafeed.js');
    wp_enqueue_script( 'lightbox', get_template_directory_uri().'/lib/plugins/lightbox/js/lightbox.js');
    wp_enqueue_script( 'site-scripts', get_template_directory_uri().'/js/script.min.js',array('jquery', 'slick-scripts', 'isotope-scripts', 'instafeed', 'lightbox'), '29022016' , true );
	}
	add_action('wp_enqueue_scripts' , 'fanatic_scripts');

/* Load Include Files */
//require_once('inc/custom-post-types.php');
require_once('inc/helper-functions.php');

//Remove image caption width
add_filter('img_caption_shortcode', 'my_img_caption_shortcode_filter',10,3);


// Replaces the excerpt "more" text by a link
function new_excerpt_more($more_text) {
	global $post;
	return '... <a href="'. get_permalink($post->ID) . '">' . $more_text . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Add active class to selected menu item
function special_nav_class($classes, $item){
	if( in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


// Google Analytics
function add_googleanalytics() {
	// Paste your Google Analytics code from Step 6 here
}
add_action('wp_footer', 'add_googleanalytics');


// add a favicon to your site
// function blog_favicon() {
// 	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'http://cdn3.wpbeginner.com/favicon.ico" />';
// }
// add_action('wp_head', 'blog_favicon');



// SHOW ALL OUR WORK POSTS ON ARCHIVE PAGE
// add_action('pre_get_posts','show_all_our_work');

// function show_all_our_work( $query ) {
//   if ( $query->is_main_query() && is_post_type_archive('our-work') ) {
//     $query->set('posts_per_page', -1);
//   }
// }

// SHOW 10 TESTIMONIALS PER PAGE
add_action( 'pre_get_posts', function ( $q ) {

    if( !is_admin() && $q->is_main_query() && $q->is_post_type_archive( 'testimonial' ) ) {

        $q->set( 'posts_per_page', 10 );

    }

});

// SHOW 20 OUR WORK POSTS PER PAGE
add_action( 'pre_get_posts', function ( $q ) {

    if( !is_admin() && $q->is_main_query() && $q->is_post_type_archive( 'our-work' ) ) {

        $q->set( 'posts_per_page', 20 );

    }

});

/* Link Redirect Function
Checks for entry in custom field custom_link. If there is an entry, it adds a link to that site. If there is not, it adds a link to the full associated post. */

/* Remove unnecessary header links */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action('wp_head', 'index_rel_link');
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
//remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
//remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
