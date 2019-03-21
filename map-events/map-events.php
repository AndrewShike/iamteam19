<?php

/*

 * Plugin Name:       Map Events

 * Description:       A plugin used to aggregate event data using an .ics file.

 * Author:            IAM Team 2019
 
 */
 
add_action( 'admin_menu', 'extra_post_info_menu' );

function extra_post_info_menu(){

  $page_title = 'WordPress Map Events';
  $menu_title = 'Map Events';
  $capability = 'manage_options';
  $menu_slug  = 'map-events';
  $function   = 'map_events_admin_page';
  $icon_url   = 'dashicons-media-code';
  $position   = 99;

  add_menu_page( $page_title,
                 $menu_title, 
                 $capability, 
                 $menu_slug, 
                 $function, 
                 $icon_url, 
                 $position );
}

if( !function_exists("map_events_admin_page") )
{
function map_events_admin_page(){
?>
  <h1>Hello. This is a page. Our functions will go here. :-0</h1>
<?php
}
}
?>
 
 
