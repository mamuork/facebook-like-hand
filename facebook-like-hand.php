<?php
/**
 * Facebook Like Hand
 *
 * A simple popup with Facebook Hand and Facebook Like.
 *
 * @package   Facebook_Like_Hand
 * @author    Mamuork <mamuork@gmail.com>
 * @license   GPL-2.0+
 * @link      http://about.me/alessandro.mignogna
 * @copyright 2013 Asernet
 *
 * @wordpress-plugin
 * Plugin Name:       Facebook Like Hand
 * Plugin URI:        http://about.me/alessandro.mignogna
 * Description:       A simple popup with Facebook Hand and Facebook Like
 * Version:           1.1.0
 * Author:            Mamuork
 * Author URI:        http://about.me/alessandro.mignogna
 * Text Domain:       facebook-like-hand
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/mamuok/facebook-like-hand
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Config file with constants and variables
 *----------------------------------------------------------------------------*/

/*
 *
 */
require_once( plugin_dir_path( __FILE__ ) . '/includes/config.php' );

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 *
 */
require_once( plugin_dir_path( __FILE__ ) . '/public/class-facebook-like-hand.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */
register_activation_hook( __FILE__, array( 'Facebook_Like_Hand', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Facebook_Like_Hand', 'deactivate' ) );

/*
 */
add_action( 'plugins_loaded', array( 'Facebook_Like_Hand', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * TODO:
 * *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . '/admin/class-facebook-like-hand-admin.php' );
	add_action( 'plugins_loaded', array( 'Facebook_Like_Hand_Admin', 'get_instance' ) );

}
