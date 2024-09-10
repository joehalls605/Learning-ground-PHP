<?php

// The code registers and enqueues the theme's main stylesheet and a custom JavaScript file.

function mytheme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), '1.0');

    /*
    wp_enqueue_style: This function tells WordPress to include a CSS file in the page.
    'mytheme-style': This is a unique name for the stylesheet being added.
    get_stylesheet_uri(): This function gets the URL of the main stylesheet (style.css) of your theme.
    array(): This is where you can list dependencies (other stylesheets that should be loaded first). In this case, there are none.
    '1.0': This is the version number of the stylesheet. It's used to help with cache-busting, so browsers load the latest version.
    */
    
    // Enqueue a custom JavaScript file
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

     /*
    wp_enqueue_script: This function tells WordPress to include a JavaScript file in the page.
    'mytheme-script': This is a unique name for the script being added.
    get_template_directory_uri() . '/assets/js/main.js': This constructs the URL to the JavaScript file located in the /assets/js/ directory of your theme.
    array('jquery'): This lists dependencies for the script. Here, it means the script depends on jQuery, which will be loaded first.
    '1.0': This is the version number of the script.
    true: This tells WordPress to load the script in the footer of the page, rather than in the header. It helps improve page load times.
    */
}

// Hook the Function (add_action):
// : This function tells WordPress to run the mytheme_enqueue_styles function at a specific point in the page load process.
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles'); 

 /*
  'wp_enqueue_scripts': This is the specific point (or "hook") in WordPress where stylesheets and scripts should be enqueued.
    'mytheme_enqueue_styles': This is the name of the function to be called when the wp_enqueue_scripts hook is triggered.
 */

?>

