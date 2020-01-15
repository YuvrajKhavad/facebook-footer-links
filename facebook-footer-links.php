<?php
/**
 * Plugin Name: Facebook Footer Link
 * Description: Add a facebook profile link to the end of the post
 * Version: 1.0
 * Author: Yuvraj Khavad
 *
 **/
// Exit if accessed directly
if(!defined('ABSPATH'))
{
    exit;
}

// Global Options Variable
$ffl_options =  get_option('ffl_settings');

// load Scripts
require_once(plugin_dir_path(__FILE__). '/includes/facebook-footer-link-scripts.php');

// HTML code for front end 
require_once(plugin_dir_path(__FILE__). '/includes/facebook-footer-link-content.php');

if(is_admin())
{
    // Load Settings
    require_once(plugin_dir_path(__FILE__). '/includes/facebook-footer-link-settings.php');
}
?>