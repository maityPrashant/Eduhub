<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 12:26 AM
 * @param $single_template
 * @return string
 */

function eduhub_get_course_single_templates($single_template)
{
    $post_id = get_the_ID();

    if (get_post_type($post_id) == 'course') {
        $single_template = SP_COURSE__PLUGIN_DIR . 'templates/single-course/single-course.php';
    }
    return $single_template;
}


/**
 * @param $archive_template
 * @return string
 */
function eduhub_get_course_archive_templates($archive_template)
{
    if (is_post_type_archive('course')) {
        $archive_template = SP_COURSE__PLUGIN_DIR . 'templates/archive-course/archive-course.php';
    }

    return $archive_template;
}

