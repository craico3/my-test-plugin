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

// make custom url available
add_action('init', 'my_url_handler');

function my_url_handler()
{
  $uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
  if ($uri === '/test/myurl') {
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello<br />";
    echo "Hellohellohellohellohellohellohellohellohellohellohellohellohello" . $uri;
    if (isset($_GET['usrtbldata']) && $_GET['usrtbldata'] == 1) {
      echo "<h1>TEST</h1>";
      exit;
    }
  }
}

