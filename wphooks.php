<!-- 
 WordPress hooks are a way to allow developers to modify or add to WordPress's behavior without changing its core files. They essentially create points in WordPress where you can "hook into" and run your custom code.

Types of Hooks
Actions: These are hooks that allow you to add or change functionality. When an action hook is triggered, it runs any functions that are hooked to it.

Filters: These hooks allow you to modify data before it is used or displayed. You can use filters to change the content or settings.


Basic Concepts
Hooking into WordPress: You use add_action() to hook a function to an action hook and add_filter() to hook a function to a filter hook.

Removing Hooks: You can use remove_action() and remove_filter() if you need to remove previously added hooks.
-->

<?php
// Function to add custom text to the footer
function my_custom_footer_text() {
    echo '<p>Custom footer text added by my custom function.</p>';
}

// Hook the custom function to the 'wp_footer' action
add_action('wp_footer', 'my_custom_footer_text');


// Function to register a custom menu
function my_custom_menu() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}

// Hook the menu registration to the 'init' action
add_action('init', 'my_custom_menu');
?>
