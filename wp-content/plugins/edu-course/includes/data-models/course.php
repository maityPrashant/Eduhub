<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 10:05 PM
 */

function eduhub_get_course_data_model($course){

  $course_data=[];
  $course_data['title']=$course->post_title;
  $course_data['content']=$course->post_content;
  $course_data['permalink']=get_permalink($course);
  $course_data['topics']=eduhub_get_course_topic_data_model($course);

  return $course_data;

}

