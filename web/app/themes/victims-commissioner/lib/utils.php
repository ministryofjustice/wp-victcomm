<?php
/**
 * Utility functions
 */
function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}

// Tell WordPress to use searchform.php from the templates/ directory
function roots_get_search_form($form) {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', 'roots_get_search_form');

function enqueue_versioned_style($handle, $src = '', $deps = array(), $media = 'all') {
	$asset_path = get_template_directory() . $src;
	$asset_url = get_template_directory_uri() . $src;
	$asset_modified_time = filemtime($asset_path);
	wp_enqueue_style($handle, $asset_url, $deps, $asset_modified_time, $media);
}

function enqueue_versioned_script($handle, $src = '', $deps = array(), $in_footer = false) {
	$asset_path = get_template_directory() . $src;
	$asset_url = get_template_directory_uri() . $src;
	$asset_modified_time = filemtime($asset_path);
	wp_enqueue_script($handle, $asset_url, $deps, $asset_modified_time, $in_footer);
}
