<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 11/1/18
 * Time: 9:18 PM
 * Plugin Name: Eduhub Course
   Description: Eduhub Core Plugin
 */

// Make sure we don't expose any info if called directly
if ( ! function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

/**
 * CONSTANTS
 **/
define('SP_COURSE__PLUGIN_DIR', plugin_dir_path(__FILE__));
define('SP_COURSE__PLUGIN_URI', plugin_dir_url(__FILE__));


/**
 * REQUIRE FILES
 **/
require 'includes/register_custom_post.php';

require 'includes/register_p2p_connections.php';

require 'includes/register_custom_fields.php';

require 'includes/templates.php';

require 'includes/common/course.php';

require 'includes/common/topic.php';

require 'includes/data-models/content.php';

require 'includes/data-models/course.php';

require 'includes/data-models/topic.php';
/**
 * ACTIONS
 **/
add_action('init', 'eduhub_register_custom_post');

add_action('init', 'eduhub_register_custom_fields');

add_action( 'p2p_init', 'eduhub_register_p2p_connections' );


/**
* FILTERS
**/
add_filter('single_template', 'eduhub_get_course_single_templates');
add_filter('archive_template', 'eduhub_get_course_archive_templates');