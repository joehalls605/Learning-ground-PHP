<?php 
function my_custom_theme_enqueue_scripts() {

    // Enqueue a JavaScript file
    wp_enqueue_script(
        'my-custom-script', // Handle
        get_template_directory_uri() . '/js/my-custom-script.js', // Path to the JavaScript file
        array(), // Dependencies (none in this case)
        '1.0.0', // Version number
        true // Load in footer
    );
}

/*
The add_action function is used to attach a custom function to a specific action hook. 
This means you can insert or execute custom code at particular points during the execution of WordPress.
*/
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');
?>
