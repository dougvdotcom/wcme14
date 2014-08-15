<?php
/*
* Plugin Name: My Shortcode Plugin
* Plugin URI: http://www.example.com/path-to-some-page-that-this-plugin-calls-home.html
* Description: This is my very first plugin, and it creates a shortcode that spits out a bunch of boilerplate text.
* Version: 1.0
* Author: Your Name Here
* Author URI: http://mywebsite.com
* License: GPL2
*/

function my_shortcode_plugin_callback($atts, $content = null) {
	switch($atts['id']) {
		case "1":
			$msg = "Copyright &copy; " . date('Y') . " All rights reserved.";
			break;
		case "2":
			$msg = 'Visit our sister site, <a href="http://www.example.com">Example Website</a>.';
			break;
		default:
			$msg = '"Good questions outrank easy answers." &mdash; Paul Samuelson';
			break;
	}
	return $msg;
}

add_shortcode('myshortcode', 'my_shortcode_plugin_callback');
?>
