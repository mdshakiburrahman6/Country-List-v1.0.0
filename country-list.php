<?php
/**
 * Plugin Name: Country List Display
 * Description: Displays a country list with flags using shortcode [country_list]
 * Version: 1.0
 * Author: You
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Register styles
function cl_enqueue_styles() {
    wp_enqueue_style('country-list-style', plugin_dir_url(__FILE__) . 'assets/style.css', [], '1.0');
}
add_action('wp_enqueue_scripts', 'cl_enqueue_styles');

// Shortcode output
function cl_shortcode_output() {

    ob_start();
    ?>
    
    <div class="country-section">

        <?php include plugin_dir_path(__FILE__) . 'countries-html.php'; ?>

    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('country_list', 'cl_shortcode_output');
