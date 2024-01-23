<?php
/**
 * Plugin Name:     Disable Password Changed Admin Email
 * Plugin URI:      https://wordpress.org/plugins/disable-password-changed-email
 * Description:     Disables the admin notification email that is sent when a user changes their password.
 * Version:         1.0.1
 * Author:          Wild Operation
 * Author URI:      https://wildoperation.com
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     disable-password-changed-email
 *
 * @package WordPress
 * @subpackage Disable Password Changed Admin Email
 * @since 1.0.0
 * @version 1.0.1
 */

/* Abort! */
if (! defined('WPINC')) {
    die;
}

require plugin_dir_path(__FILE__) . 'vendor/autoload.php';

new \WODPCE\Vendor\WOWPRB\WPPluginReviewBug(__FILE__);

/**
 * Disable Admin Notification of User Password Change
 *
 * @see pluggable.php
 */
if (! function_exists('wp_password_change_notification')) {
    function wp_password_change_notification($user)
    {
        return;
    }
}
