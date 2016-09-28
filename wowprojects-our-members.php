<?php

/**
* Plugin Name: Our Members
* Plugin URI: http://wowprojects.co
* Description: This plugin registers the 'member' post type, it let's you manage your company partner profiles.
* Author: XicoOfficial
* Version: 1.0.0
* License: GPLv2
* Author URI: http://wowprojects.co
* Text Domain: our-members-by-wowprojects
* Domain Path: /languages/
*
* @package WordPress
* @subpackage WOWProjects_Our_Members
* @author XicoOfficial
* @since 1.0.0
*/



/**
 * Tell WordPress to load a translation file if it exists for the user's language
 */
function wds_om_load_plugin_textdomain() {
    load_plugin_textdomain( 'our-nenbers-by-wowprojects', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'wds_om_load_plugin_textdomain' );

