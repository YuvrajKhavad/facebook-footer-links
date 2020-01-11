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
// load Scripts
require_once(plugin_dir_path(__FILE__). '/includes/facebook-footer-link-scripts.php');

require_once(plugin_dir_path(__FILE__). '/includes/facebook-footer-link-content.php');

?>