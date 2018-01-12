<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 11/1/18
 * Time: 10:18 PM
 */

function eduhub_register_p2p_connections()
{
    /**
     * Register Connection Between Course And Topic
    */
    eduhub_register_connection_course_to_topic();

    /**
     * Register Connection Between Topic And Contents [Video/Handouts]
     */
    eduhub_register_connection_topic_to_contents();

}

/**
 * Register Connection Between Course And Topic
 */
function eduhub_register_connection_course_to_topic()
{
    p2p_register_connection_type( array(
        'name' => 'course_to_topics',
        'from' => 'course',
        'to' => 'topic',
        'cardinality' => 'one-to-many',
        'title' => array(
            'from' => 'Topics For this Course',
            'to' => 'Course where this is being used'
        ),
        'sortable' => 'any',
        'admin_box' => array(
            'show' => 'any',
            'context' => 'advanced'
        ),
        'admin_column' => 'any',
    ) );
}

/**
 * Register Connection Between Topic And Contents [Video/Handouts]
 */
function eduhub_register_connection_topic_to_contents()
{

    p2p_register_connection_type( array(
        'name' => 'topics_to_contents',
        'from' => 'topic',
        'to' => array( 'video', 'handout' ),
        'cardinality' => 'many-to-many',
        'admin_box' => array(
            'show' => 'any',
            'context' => 'advanced'
        ),
        'fields' => array(
            'content_title' => array(
                'title' => 'Content Title',
                'type' => 'text'
            ),
            'is_public' => array(
                'title' => 'Is Public?',
                'type' => 'checkbox'
            ),
        ),
        'sortable' => 'any',
        'title' => array(
            'from' => 'Content for this topic',
            'to' => 'Topics where this is being used'
        ),
        'admin_column' => 'to',
        'to_labels' => array(
            'singular_name' => 'Video/Handout',
            'search_items' => 'Search Content',
            'not_found' => 'No Content found.',
            'create' => 'Create Content',
        ),
        'from_labels' => array(
            'singular_name' => 'Topics',
            'search_items' => 'Search Topics',
            'not_found' => 'No Topics found.',
            'create' => 'Select Topics',
        ),
    ) );
}