<?php
/**
 * @package New Relic Insights attributes for WordPress
 * @version 0.1
 */
/*
Plugin Name: New Relic Insights attributes for WordPress
Plugin URI: http://newrelic.com
Description: This plugin adds Insights attributes for logged in users.
Author: New Relic
Version: 0.1
Author URI: http://newrelic.com
*/

function add_newrelic_insights_attributes() {
  if ( is_user_logged_in() ) {
    $current_user = wp_get_current_user();
    newrelic_add_custom_parameter("wp_logged_in", true);
    newrelic_add_custom_parameter("wp_username", $current_user->user_login);
    newrelic_add_custom_parameter("wp_user_id", $current_user->ID);
    newrelic_add_custom_parameter("wp_user_email", $current_user->user_email);
  } else {
    newrelic_add_custom_parameter("wp_logged_in", false);
  }
}

add_action( 'init', 'add_newrelic_insights_attributes' );

?>
