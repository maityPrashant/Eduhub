<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 12:35 AM
 */
get_header();
$courses=[];
if(have_posts()) : while(have_posts()) : the_post();
    $courses[]=[
            'title'=>get_the_title(),
            'content' => get_the_content(),
			'permalink' => get_the_permalink()
            ] ;
endwhile;
endif;
$context = Timber::get_context();
$context['courses']=$courses;
Timber::render( 'archive-course.twig',$context );
get_footer();
?>

