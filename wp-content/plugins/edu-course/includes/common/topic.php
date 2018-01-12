<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 10:10 PM
 */

function eduhub_get_contents($topic){

  $topics = get_posts( array(
	  'connected_type' => 'topics_to_contents',
	  'connected_items' => $course,
	  'nopaging' => true,
	  'suppress_filters' => false
  ) );

  return $topics;

}