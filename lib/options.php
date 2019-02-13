<?php

/*
 * Add ACF options page 'Thema Instellingen'
 */
 if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
     'page_title' 	=> 'Thema Instellingen',
     'menu_title'	=> 'Thema Instellingen',
     'menu_slug' 	=> 'theme-options',
     'capability'	=> 'edit_posts',
     'redirect'		=> false
   ));

 }
