<?php

/**
 * My test plugin template for displaying a list of users
 *
 * @package Composer
 * @subpackage craico/my-test-plugin
 * @since 1.1.2
 */

get_header(); ?>

<head>
  <title>Test</title>
</head>

<div>
  <h1>Fetch API GET REQUEST</h1>
  <h3>Fetching Users</h3>

  <!-- Table to display fetched user data -->
  <table id="users"></table>
</div>

<?php

get_footer();
