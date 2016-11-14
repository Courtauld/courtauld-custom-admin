<?php

/*
   Plugin Name: Courtauld Custom Admin
   Description: Customises the admin interface. This version hides the Jetpack page, and the Posts page.
   Version: 1.0
   Author: Jacob Charles Wilson
   Author URI: https://jclwilson.github.io
   License: GPL2
   */

// Hide Dashboard Widgets
function courtauld_dashboard_widgets() {
	global $wp_meta_boxes;
	// Today widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	// Last comments
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	// Incoming links
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// Plugins
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
}
add_action('wp_dashboard_setup', 'courtauld_dashboard_widgets');

?>
