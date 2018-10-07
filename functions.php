<?php

function university_files() {
  // changing the version from 1.0 to microtime() on the js and css links forces chrome to look at the file every time instead of using a cached version. Note: when you make the site live you'll want to change this back
  wp_enqueue_script('main-university-javascript', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
  wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {

  // personal preference - code below is the dynamic wordpress menu controls, as opposed to using the UL/LI code below it on the footer and header.php pages
  // register_nav_menu('headerMenuLocation', 'Header Menu Location');
  // register_nav_menu('footerLocationOne', 'Footer Location One');
  // register_nav_menu('footerLocationTwo', 'Footer Location Two');

  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

?>
