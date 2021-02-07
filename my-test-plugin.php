<?php

/*
Plugin Name: My Test Plugin
Plugin URI: http://wordpressplugincourse.com/plugins/snappy-list-builder
Description: This is a test plugin for WordPress
Version: 1.0
Author: Joel Funk @ Code College
Author URI: http://joelfunk.codecollege.ca
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: my-snappy-list-builder
*/

$mtp_redirect = 0;

// make custom url available
add_action('init', 'my_url_handler');

function my_url_handler()
{
  global $mtp_redirect;
  $uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
  if ($uri === '/test/myurl') :
    if (isset($_GET['usrtbldata']) && $_GET['usrtbldata'] == 1) :
      $mtp_redirect = 1;
    endif;
  endif;
}

// load external files to public website
add_action('wp_enqueue_scripts', 'mtp_public_scripts');

function mtp_public_scripts()
{

  // register scripts with WordPress's internal library
  wp_register_script('my-test-plugin-js-public', plugins_url('/js/public/main.js', __FILE__), array('jquery'), '', true);

  // wp_register_style('snappy-list-builder-css-public', plugins_url('/css/public/my-snappy-list-builder.css', __FILE__));

  // add to que of scripts that get loaded into every page
  wp_enqueue_script('my-test-plugin-js-public');
  // wp_enqueue_style('snappy-list-builder-css-public');

  // setup php variables to pass into our javascript file
  /* 
  $php_vars = array(
    'admin_url' => admin_url(),
    'ajax_url' => admin_url('admin-ajax.php')
  );
  */

  //pass in our php variables and make them available in javascript as variable php (ex. php.ajax_url)
  /* 
  wp_localize_script('snappy-list-builder-js-public', 'php', $php_vars);
  */
}

add_filter('template_include', 'test_page_template', 99);
function test_page_template($template)
{
  global $mtp_redirect;

  if ($mtp_redirect) {
    $new_template = plugin_dir_path(__FILE__) . 'test-page-template.php';
    if ('' != $new_template) {
      return $new_template;
    }
  }
  return $template;
}
