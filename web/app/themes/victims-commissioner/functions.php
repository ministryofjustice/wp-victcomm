<?php

/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
    'lib/utils.php', // Utility functions
    'lib/init.php', // Initial theme setup and constants
    'lib/wrapper.php', // Theme wrapper class
    'lib/sidebar.php', // Sidebar class
    'lib/config.php', // Configuration
    'lib/activation.php', // Theme activation
    'lib/titles.php', // Page titles
    'lib/nav.php', // Custom nav modifications
    'lib/gallery.php', // Custom [gallery] modifications
    'lib/comments.php', // Custom comments modifications
    'lib/scripts.php', // Scripts and stylesheets
    'lib/extras.php', // Custom functions
    'lib/theme-options.php', // OptionTree theme options
    'lib/image-sizes.php', // Custom image sizes
    'lib/meta-box-array.php', // Meta box array
);

foreach ($roots_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);

// Get attachment id from URL
function custom_get_attachment_id($guid)
{
    global $wpdb;

    /* nothing to find return false */
    if (!$guid) {
        return false;
    }

    /* get the ID */
    $id = $wpdb->get_var(
        $wpdb->prepare(
            "SELECT  p.ID FROM    $wpdb->posts p WHERE   p.guid = %s AND p.post_type = %s ",
            $guid,
            'attachment'
        )
    );

    /* the ID was not found, try getting it the expensive WordPress way */
    if ($id == 0) {
        $id = url_to_postid($guid);
    }

    return $id;
}

// Build homepage image (maybe add srcset)
function build_homepage_image($option_name)
{
    $lead_image_url = ot_get_option($option_name);
    $lead_image_id = custom_get_attachment_id($lead_image_url);
    $lead_image_src = wp_get_attachment_image_src($lead_image_id, 'homepage-lg');
    echo '<img src="' . $lead_image_src[0] . '">';
}

/**
 * Get the current version of WP
 *
 * This is provided for external resources to resolve the current wp_version
 *
 * @return string
 */
function moj_wp_version()
{
    global $wp_version;
    return $wp_version;
}

add_action('rest_api_init', function () {
    register_rest_route('moj', '/version', array(
        'methods' => 'GET',
        'callback' => 'moj_wp_version'
    ));
});
