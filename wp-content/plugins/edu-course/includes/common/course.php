<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 10:05 PM
 *
 * @param $course
 *
 * @return array
 */

function eduhub_get_topics($course){

  $topics = get_posts( array(
	  'connected_type' => 'course_to_topics',
	  'connected_items' => $course,
	  'nopaging' => true,
	  'suppress_filters' => false
  ) );

  return $topics;
}

