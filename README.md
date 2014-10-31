newrelic-wordpress-insights
===========================

This plugin add WordPress user metadata to page views for querying in New Relic Insights. To install it, simply copy insights.php to in your site's `wp-content/plugins` folder and activate it via the WordPress admin page for plugins. 

This plugin adds the following 'custom parameters' to New Relic Insights Transaction events, transaction traces and traced errors:
* wp_logged_in (true, false)
* wp_username
* wp_user_id
* wp_user_email

This is *not* an officially supported plugin by New Relic. Please file an issue on this GitHub project if you encounter any issues, or have feedback/enhancement requests.
