<?php
// Add Css
function custom_theme_styles()
{
    // Enqueue the main stylesheet
    wp_enqueue_style('main-styles', get_stylesheet_uri()); // Loads style.css from the theme's root directory
}
add_action('wp_enqueue_scripts', 'custom_theme_styles');


// Register Nav and add logo support
function custom_theme_setup()
{
    // Support for a custom logo
    add_theme_support('custom-logo', array(
        'height'      => 24,  // Logo height in pixels
        'width'       => 180,  // Logo width in pixels
        'flex-height' => true, // Allow flexible height
        'flex-width'  => true, // Allow flexible width
    ));


    // Register the primary menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gridpixels theme'),
    ));

    // Register the footer menu
    register_nav_menus(array(
        'footer' => __('Footer Menu', 'gridpixels theme'),
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');


// Load Font Awesome
function load_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');


// Load Google Fonts
function load_google_fonts()
{
    wp_enqueue_style('google-fonts', 'href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'load_google_fonts');