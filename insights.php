<?php
/**
 * @package New Relic Insights attributes for WordPress
 * @version 1.0
 */
/*
Plugin Name: New Relic Insights attributes for WordPress
Plugin URI: https://github.com/tedpennings/newrelic-wordpress-insights
Description: This plugin adds Insights attributes for logged in users.
Author: Ted Pennings
Version: 1.0
Author URI: http://github.com/tedpennings
*/

function add_newrelic_insights_attributes() {
  if (!function_exists('newrelic_add_custom_parameter')) {
    return FALSE;
  }
  if ( is_user_logged_in() ) {
    $current_user = wp_get_current_user();
    newrelic_add_custom_parameter('wp_logged_in', true);
    newrelic_add_custom_parameter('wp_username', $current_user->user_login);
    newrelic_add_custom_parameter('wp_user_id', $current_user->ID);
    newrelic_add_custom_parameter('wp_user_email', $current_user->user_email);
  } else {
    newrelic_add_custom_parameter('wp_logged_in', false);
  }
}

add_action('init', 'add_newrelic_insights_attributes');

?>
