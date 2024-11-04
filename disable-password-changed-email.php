<?php
/**
 * Plugin Name:     Disable Password Changed Admin Email
 * Plugin URI:      https://github.com/wildoperation/Disable-Password-Changed-Email-WordPress-Plugin
 * Description:     Disables the admin notification email that is sent when a user changes their password.
 * Version:         1.0.3
 * Author:          Wild Operation
 * Author URI:      https://wildoperation.com
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     disable-password-changed-email
 *
 * @package WordPress
 * @subpackage Disable Password Changed Admin Email
 * @since 1.0.0
 * @version 1.0.3
 */

/* Abort! */
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

new \WODPCE\Vendor\WOWPRB\WPPluginReviewBug(
	__FILE__,
	'disable-password-changed-email',
	array(
		'intro'            => __( 'You\'ve been using Disable Password Changed Admin Email for a while now. We\'d love your feedback!', 'disable-password-changed-email' ),
		'rate_link_text'   => __( 'Rate the plugin', 'disable-password-changed-email' ),
		'remind_link_text' => __( 'Remind me later', 'disable-password-changed-email' ),
		'nobug_link_text'  => __( 'Don\'t ask again', 'disable-password-changed-email' ),
	)
);

/**
 * Disable Admin Notification of User Password Change
 *
 * @see pluggable.php
 */
if ( ! function_exists( 'wp_password_change_notification' ) ) {
	function wp_password_change_notification( $user ) {
		return;
	}
}
