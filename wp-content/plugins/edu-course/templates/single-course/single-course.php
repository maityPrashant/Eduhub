<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 12:35 AM
 */

get_header();
$course=get_queried_object();
$context = Timber::get_context();
$context['course_data']=eduhub_get_course_data_model($course);
$context['video_player']=do_shortcode('[video src="https://www.youtube.com/watch?v=fE1k9VYqJ8o&t" width="640" height="360"]');
Timber::render( 'single-course.twig',$context );