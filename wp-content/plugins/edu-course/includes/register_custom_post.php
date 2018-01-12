<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 11/1/18
 * Time: 10:18 PM
 */

function eduhub_register_custom_post()
{
    /**
     * Register Custom Post Type Course
    */
    eduhub_register_custom_post_course();

    /**
     * Register Custom Post Type Topic
     */
    eduhub_register_custom_post_topic();

    /**
     * Register Custom Post Type Video
     */
    eduhub_register_custom_post_video();

    /**
     * Register Custom Post Type Handouts
     */
    eduhub_register_custom_post_handouts();

}

/**
 * Register Custom Post Type Course
 */
function eduhub_register_custom_post_course()
{
    $labels = array(
        "name" => __('Courses', 'eduhub-theme'),
        "singular_name" => __('Course', 'eduhub-theme'),
    );

    $args = array(
        "label" => __('Courses', 'eduhub-theme'),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "course", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "thumbnail", 'page-attributes'),
    );
    register_post_type("course", $args);
}

/**
 * Register Custom Post Type Topic
 */
function eduhub_register_custom_post_topic()
{
    $labels = array(
        "name" => __('Topics', 'eduhub-theme'),
        "singular_name" => __('Topic', 'eduhub-theme'),
    );

    $args = array(
        "label" => __('Topics', 'eduhub-theme'),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "topic", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "thumbnail", 'page-attributes'),
    );
    register_post_type("topic", $args);
}

/**
 * Register Custom Post Type Video
 */
function eduhub_register_custom_post_video()
{
    $labels = array(
        "name" => __('Videos', 'eduhub-theme'),
        "singular_name" => __('Video', 'eduhub-theme'),
    );

    $args = array(
        "label" => __('Videos', 'eduhub-theme'),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "video", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "thumbnail", 'page-attributes'),
    );
    register_post_type("video", $args);


}

/**
 * Register Custom Post Type Handouts
 */
function eduhub_register_custom_post_handouts()
{

    $labels = array(
        "name" => __( 'Handouts', 'superprofs-theme' ),
        "singular_name" => __( 'Handout', 'superprofs-theme' ),
    );

    $args = array(
        "label" => __( 'Handouts', 'superprofs-theme' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "handout", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );
    register_post_type( "handout", $args );
}
