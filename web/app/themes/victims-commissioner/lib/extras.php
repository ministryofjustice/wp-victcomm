<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

/* Setup option tree */
add_filter('ot_theme_mode', '__return_true');
add_filter('ot_show_pages', '__return_false');
add_filter('ot_show_new_layout', '__return_false');
add_filter('ot_use_theme_options', '__return_true');

add_filter('ot_header_version_text', '__return_null');

//load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );
require_once (trailingslashit(get_template_directory()) . 'option-tree/ot-loader.php');

/**
 * Meta Boxes
 */
load_template( trailingslashit( get_template_directory() ) . 'lib/meta-boxes.php' );