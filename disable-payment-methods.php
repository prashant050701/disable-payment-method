<?php
/*
Plugin Name: Disable Payment Methods for Certain Products by IDs
Description: Disables specific payment methods based on product IDs provided via the admin dashboard.
Version: 1.0
Author: Divyansh Srivastava
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

include(plugin_dir_path(__FILE__) . 'settings-page.php');
include(plugin_dir_path(__FILE__) . 'disable-payment-methods-functions.php');

add_action('admin_menu', 'dpm_register_settings_page');

function dpm_register_settings_page() {
    add_menu_page(
        'Disable Payment Methods',          // Page title
        'Payment Methods Control',          // Menu title
        'manage_options',                   // Capability
        'dpm-settings',                     // Menu slug
        'dpm_render_settings_page',         // Function to render the settings page
        'dashicons-admin-settings',         // Icon
        66                                  // Position
    );
}
