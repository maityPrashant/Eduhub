<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 10:10 PM
 *
 * @param $course
 *
 * @return array
 */

function eduhub_get_course_topic_data_model( $course ) {

  $topics        = [];
  $course_topics = eduhub_get_topics( $course );

  foreach ( $course_topics as $course_topic ) {

	$topic['id']       = $course_topic->ID;
	$topic['title']    = $course_topic->post_title;
	$topic['contents'] = eduhub_get_content_data_model($course_topics);
	$topics[]          = $topic;
  }

  return $topics;


}