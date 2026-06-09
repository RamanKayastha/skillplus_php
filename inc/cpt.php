<?php

/**
 * Custom Post Types Registration
 *
 * @package skillplus
 */

/**
 * Register Features Custom Post Type
 */
function skillplus_register_features_cpt()
{
    $labels = array(
        'name'                  => _x('Features', 'Post type general name', 'skillplus'),
        'singular_name'         => _x('Feature', 'Post type singular name', 'skillplus'),
        'menu_name'             => _x('Features', 'Admin Menu text', 'skillplus'),
        'name_admin_bar'        => _x('Feature', 'Add New on Toolbar', 'skillplus'),
        'add_new'               => __('Add New', 'skillplus'),
        'add_new_item'          => __('Add New Feature', 'skillplus'),
        'new_item'              => __('New Feature', 'skillplus'),
        'edit_item'             => __('Edit Feature', 'skillplus'),
        'view_item'             => __('View Feature', 'skillplus'),
        'all_items'             => __('All Features', 'skillplus'),
        'search_items'          => __('Search Features', 'skillplus'),
        'not_found'             => __('No features found.', 'skillplus'),
        'not_found_in_trash'    => __('No features found in Trash.', 'skillplus'),
        'featured_image'        => _x('Feature Cover Image', 'Overrides the "Featured Image" phrase', 'skillplus'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the "Set featured image" phrase', 'skillplus'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the "Remove featured image" phrase', 'skillplus'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the "Use as featured image" phrase', 'skillplus'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'features'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-star-filled',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
        'taxonomies'         => array('feature_category'),
    );

    register_post_type('features', $args);
}
add_action('init', 'skillplus_register_features_cpt');

/**
 * Register Feature Category Taxonomy
 */
function skillplus_register_feature_category()
{
    $labels = array(
        'name'              => _x('Feature Categories', 'taxonomy general name', 'skillplus'),
        'singular_name'     => _x('Feature Category', 'taxonomy singular name', 'skillplus'),
        'search_items'      => __('Search Feature Categories', 'skillplus'),
        'all_items'         => __('All Feature Categories', 'skillplus'),
        'parent_item'       => __('Parent Feature Category', 'skillplus'),
        'parent_item_colon' => __('Parent Feature Category:', 'skillplus'),
        'edit_item'         => __('Edit Feature Category', 'skillplus'),
        'update_item'       => __('Update Feature Category', 'skillplus'),
        'add_new_item'      => __('Add New Feature Category', 'skillplus'),
        'new_item_name'     => __('New Feature Category Name', 'skillplus'),
        'menu_name'         => __('Feature Categories', 'skillplus'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'feature-category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('feature_category', array('features'), $args);
}
add_action('init', 'skillplus_register_feature_category');

/**
 * Register Industries Custom Post Type
 */
function skillplus_register_industries_cpt()
{
    $labels = array(
        'name'                  => _x('Industries', 'Post type general name', 'skillplus'),
        'singular_name'         => _x('Industry', 'Post type singular name', 'skillplus'),
        'menu_name'             => _x('Industries', 'Admin Menu text', 'skillplus'),
        'name_admin_bar'        => _x('Industry', 'Add New on Toolbar', 'skillplus'),
        'add_new'               => __('Add New', 'skillplus'),
        'add_new_item'          => __('Add New Industry', 'skillplus'),
        'new_item'              => __('New Industry', 'skillplus'),
        'edit_item'             => __('Edit Industry', 'skillplus'),
        'view_item'             => __('View Industry', 'skillplus'),
        'all_items'             => __('All Industries', 'skillplus'),
        'search_items'          => __('Search Industries', 'skillplus'),
        'not_found'             => __('No industries found.', 'skillplus'),
        'not_found_in_trash'    => __('No industries found in Trash.', 'skillplus'),
        'featured_image'        => _x('Industry Cover Image', 'Overrides the "Featured Image" phrase', 'skillplus'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the "Set featured image" phrase', 'skillplus'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the "Remove featured image" phrase', 'skillplus'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the "Use as featured image" phrase', 'skillplus'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'industries'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-building',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
        'taxonomies'         => array('industry_category'),
    );

    register_post_type('industries', $args);
}
add_action('init', 'skillplus_register_industries_cpt');

/**
 * Register Industry Category Taxonomy
 */
function skillplus_register_industry_category()
{
    $labels = array(
        'name'              => _x('Industry Categories', 'taxonomy general name', 'skillplus'),
        'singular_name'     => _x('Industry Category', 'taxonomy singular name', 'skillplus'),
        'search_items'      => __('Search Industry Categories', 'skillplus'),
        'all_items'         => __('All Industry Categories', 'skillplus'),
        'parent_item'       => __('Parent Industry Category', 'skillplus'),
        'parent_item_colon' => __('Parent Industry Category:', 'skillplus'),
        'edit_item'         => __('Edit Industry Category', 'skillplus'),
        'update_item'       => __('Update Industry Category', 'skillplus'),
        'add_new_item'      => __('Add New Industry Category', 'skillplus'),
        'new_item_name'     => __('New Industry Category Name', 'skillplus'),
        'menu_name'         => __('Industry Categories', 'skillplus'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'industry-category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('industry_category', array('industries'), $args);
}
add_action('init', 'skillplus_register_industry_category');


