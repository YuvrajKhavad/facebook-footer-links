<?php
// Add Scripts
function ffl_add_scripts()
{
    wp_enqueue_style('ffl-main-style', FFL_PLUGIN_CSS . 'style.css');
    wp_enqueue_script('ffl-main-script', FFL_PLUGIN_JS . 'main.js');
}
add_action('wp_enqueue_scripts', 'ffl_add_scripts');
?>
