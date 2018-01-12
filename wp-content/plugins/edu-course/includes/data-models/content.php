<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 10:10 PM
 *
 * @param $topic
 *
 * @return array
 * @internal param $course
 *
 */

function eduhub_get_content_data_model( $topic ) {

  $content_data = [];
  $contents = eduhub_get_contents( $topic );

  foreach ( $contents as $content ) {

	$content_temp['id']    = $content->ID;
	$content_temp['title'] = $content->post_title;
	$content_temp['url']   = $content->url ?? null;
	$content_temp['type']  = get_post_type( $content );
	if ( get_post_type( $content ) == 'handout' ) {
	  $content_temp['mime_type'] = $content->mime_type ?? null;
	  $content_temp['size']      = $content->size ?? null;
	}
	$content_data[] = $content_temp;
  }

  return $content_data;


}