<?php
/*
Plugin Name: Multisite Dashboard Feed Widget
Plugin URI: http://wpti.ps/category/plugins/
Description: This dashboard widget shows the latest Posts from the main site of a multisite install in the top of the Dashboard of the sites hanging under the multisite install.
Version: 1.2.3
Author: Piet Bos
Author URI: http://wpti.ps
License: GPL2
*/

/*  Copyright 2011  Piet Bos  (email : senlinonline@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// For debugging purposes
//error_reporting(E_ALL);
//ini_set("display_errors", 1); 
//define('WP-DEBUG', true);


	add_action( 'init', 'my_plugin_init' );

	function my_plugin_init() { load_plugin_textdomain( 'msdbfeed' ); }
	
	
	if(!load_plugin_textdomain('msdbfeed','/wp-content/languages/'))
		load_plugin_textdomain('msdbfeed','/wp-content/plugins/msdashboardfeed/languages/');

	// Add Feed Dashboard Widget
	function msdbfeed_setup_function() {
	    add_meta_box( 'msdbfeed_widget', __( 'Recent Updates', 'msdbfeed' ), 'msdbfeed_widget_function', 'dashboard', 'normal', 'high' );
	}
	function msdbfeed_widget_function() {
	    include ('msrss.php');
		// This makes sure that the positioning is also good for right-to-left languages
		$x = is_rtl() ? 'left' : 'right';
		echo '<style type="text/css">#msdbfeed_widget {float:$x;}</style>';
	}

	// Register the new dashboard widget into the 'wp_dashboard_setup' action 
	add_action( 'wp_dashboard_setup', 'msdbfeed_setup_function' );

	// Adds stylesheet for mint background image
	add_action( 'admin_print_styles', 'msdbfeed_load_custom_admin_css' );


	// The load CSS function
	function msdbfeed_load_custom_admin_css() {
		wp_enqueue_style( 'msdbfeed_custom_admin_css', plugins_url( '/style.css', __FILE__ ) );
	}


?>