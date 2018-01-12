<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 12/1/18
 * Time: 12:47 AM
 */

function eduhub_load_files()
{
  /* add the MDL CDN files */
  wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
  wp_enqueue_style('Material_Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');

  wp_enqueue_script('Material_Script', 'https://code.getmdl.io/1.3.0/material.min.js');

}

