<?php
/*
Plugin Name: Light/Dark Mode Toggle
Description: Adds a light/dark mode toggle button to any site.
Version: 1.0
Author: Adam
*/

// Function to enqueue styles and scripts
function ldm_enqueue_scripts()
{
    wp_enqueue_style('ldm-styles', plugin_dir_url(__FILE__) . 'css/ldm-styles.css');
    wp_enqueue_script('ldm-scripts', plugin_dir_url(__FILE__) . 'js/ldm-scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ldm_enqueue_scripts');

// Function to add the toggle button HTML
function ldm_add_toggle_button()
{
    echo '<div class="ldm-toggle"><div class="pill"></div></div>';
}
add_action('wp_footer', 'ldm_add_toggle_button');
