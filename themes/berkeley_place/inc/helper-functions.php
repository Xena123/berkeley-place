<?php

// Get excerpt of custom length
function get_excerpt($count){
	global $post;
	$permalink = get_permalink($post->ID);
	$excerpt = get_the_content();
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $count);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = $excerpt.'...';
	return $excerpt;
}




// Return value of "redirect_link" custom field if exists, otherwise return permalink.
function get_custom_link() {
	global $post;
	if(the_field('redirect_link')) {
		return the_field('redirect_link');
	} else {
		get_permalink();
	}
}


//Get meta data for archive single posts
function get_meta($field) {
	global $post;
	if (get_post_meta($post->ID, $field, true)) {
		return get_post_meta($post->ID, $field, true);
	}
}
