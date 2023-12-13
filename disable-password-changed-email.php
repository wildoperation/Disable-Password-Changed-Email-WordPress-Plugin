<?php
/**
 * Plugin Name:     Disable Password Changed Email
 * Plugin URI:      https://wildoperation.com
 * Description:     Disables the admin notification email that is sent when a user changes their password.
 * Version:         1.0.0
 * Author:          Wild Operation
 * Author URI:      https://wildoperation.com
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     disable-password-changed-email
 *
 * @package WordPress
 * @subpackage Disable Password Changed Email
 * @since 1.0.0
 * @version 1.0.0
 */

/* Abort! */
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

new \WODPCE\Vendor\WOWPRB\WPPluginReviewBug( __FILE__ );

/**
 * Disable password change email
 */
add_filter( 'send_password_change_email', '__return_false', 100 );
