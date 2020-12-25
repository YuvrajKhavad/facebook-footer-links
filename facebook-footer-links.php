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

// Defin Constant
define('FFL_PLUGIN_PATH', plugin_dir_path(__FILE__).'/');
define('FFL_INCLUDES', FFL_PLUGIN_PATH .'includes/');

define('FFL_PLUGIN_URL', plugins_url().'/facebook-footer-link/');
define('FFL_URL_INCLUDES', FFL_PLUGIN_URL.'includes/');
define('FFL_PLUGIN_JS', FFL_PLUGIN_URL.'js/');
define('FFL_PLUGIN_CSS', FFL_PLUGIN_URL.'css/');

// Global Options Variable
$ffl_options = get_option('ffl_settings');

if(is_admin())
{
    // Load admin Settings
    require_once(FFL_INCLUDES. 'facebook-footer-link-settings.php');
}

// load Scripts
require_once(FFL_INCLUDES. 'facebook-footer-link-scripts.php');

// HTML code for front end
require_once(FFL_INCLUDES. 'facebook-footer-link-content.php');
?>