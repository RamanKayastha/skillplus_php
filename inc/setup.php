<?php

/**
 * theme functions and description
 *
 * @package 909itacademy
 */

/*
============================
Theme Support
============================
*/
function skillplus_theme_support()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'skillplus_theme_support');

function skillplus_theme_scripts()
{
    $version = wp_get_theme()->get('Version');

    // Enqueue theme styles
    wp_enqueue_style('skillplus-style', get_stylesheet_uri(), array(), $version);

    // Enqueue theme scripts
    wp_enqueue_script('skillplus-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), $version, true);
    
}

add_action('wp_enqueue_scripts', 'skillplus_theme_scripts');

add_filter('rest_authentication_errors', function ($result) {

    // If already has an error, return it
    if (!empty($result)) {
        return $result;
    }

    // Allow access if user is logged in
    if (is_user_logged_in()) {
        return $result;
    }

    // Block access for non-logged-in users
    return new WP_Error(
        'rest_not_logged_in',
        'You must be logged in to access the REST API.',
        array('status' => 401)
    );
});
add_filter('rest_prepare_programs', function ($response, $post, $request) {

    $data = $response->get_data();

    $custom = [
        'id' => $data['id'],
        'title' => $data['title']['rendered'],
        'slug' => $data['slug'],
        'excerpt' => strip_tags($data['excerpt']['rendered']),
        'link' => $data['link'],
    ];

    return rest_ensure_response($custom);
}, 10, 3);
