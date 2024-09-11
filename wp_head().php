<!-- 
 wp_head() is a hook that allows WordPress, plugins, and themes to insert important elements into the <head> section of your HTML document. 
    This includes meta tags, stylesheets, JavaScript files, and other resources.
Plugins and themes can use wp_enqueue_style() and wp_enqueue_script() to add their stylesheets and scripts. These functions hook into wp_head() to ensure that the resources are included in the correct order and in a way that avoids conflicts.
-->


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Content goes here -->
