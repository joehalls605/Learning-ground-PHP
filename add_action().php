<!--
add_action() is a function in WordPress used to hook your custom functions into WordPress at specific points in its execution. This allows you to extend or modify WordPress behavior without altering the core files.

How add_action() Works
Hooks: Think of WordPress as having different "hooks" throughout its process. These hooks are specific points where WordPress allows you to "hook into" its execution to add your own custom code.

Actions and Filters:

Actions: Actions are hooks that allow you to add or change functionality. For example, you can add custom code to run when a page is loaded, when a post is saved, or when a menu is displayed.
Filters: Filters are hooks that allow you to modify data before it is output or saved. For example, you might modify the content of a post before it is displayed on the front end.
Using add_action():

First Parameter: The name of the hook you want to attach your function to (e.g., wp_enqueue_scripts, init, the_content).
Second Parameter: The name of the function you want to execute when that hook is triggered.
-->

<?php
// Define a custom function
function my_custom_function() {
    // Your custom code here
    echo 'Hello, WordPress!';
}

// Hook your custom function to the 'init' action
add_action('init', 'my_custom_function');
?>

<!--
Define a Function: First, you define a function with the custom code you want to run.

Hook the Function: Then, you use add_action() to hook this function to a specific WordPress action.

'init' is a built-in action hook that runs after WordPress has finished loading but before any headers are sent. It’s a good place to register custom post types, taxonomies, or shortcodes.
'my_custom_function' is the name of the function you defined earlier. This function will run when the init action is triggered.
-->
