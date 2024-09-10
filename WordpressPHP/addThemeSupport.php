<?php 

function mytheme_setup(){
    add_theme_support("post-thumbnails");
    register_nav_menus(array(
        "primary" => __("Primary Menu", "mytheme"),
    ));
    /*
register_nav_menus: This function registers one or more navigation menus for your theme.
array(...): This is an array where each entry registers a menu location.
"primary": This is a unique name (or slug) for the menu location. You’ll use this name to display the menu in your theme.
__("Primary Menu", "mytheme"): This is a translation function. It translates the menu location name ("Primary Menu") into the language specified by the theme's text domain ("mytheme"). 
This helps make the theme translatable.
    */

}
add_action("after_setup_theme", "mytheme_setup");
/*
Hook the Function (add_action):

add_action("after_setup_theme", "mytheme_setup");:
add_action: This function tells WordPress to run the mytheme_setup function at a specific point in the theme setup process.
"after_setup_theme": This is the hook where the function should run. It fires after the theme is initialized but before any headers are sent.
"mytheme_setup": This is the name of the function to be called when the after_setup_theme hook is triggered.
*/

/*
n Summary
Purpose: The code sets up basic features for your theme.
Adds support for post thumbnails (featured images).
Registers a navigation menu location called "Primary Menu".
Why: This ensures your theme can use featured images and has a place for a menu that users can customize from the WordPress admin area.
Where: This code is typically placed in the functions.php file of your WordPress theme.
*/

?>
