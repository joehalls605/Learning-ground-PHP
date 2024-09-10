
<!-- body_class()
What it Does:

Purpose: Adds a list of CSS classes to the <body> tag of your WordPress site. These classes help you target specific pages or conditions in your CSS.
How It Works:

Function: body_class() generates a list of classes that are automatically added to the <body> tag. These classes include information about the page type, post type, and more.
Usage: Place <?php body_class(); ?> inside the <body> tag in your theme’s header.php file.
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Your content here -->
</body>
</html>


<!-- body_class() 
wp_head()
What it Does:
Purpose: Inserts important scripts, styles, and meta information into the <head> section of your site.
How It Works:

Function: wp_head() is a hook that WordPress and plugins use to inject code into the <head> section of your HTML. This includes essential elements like CSS files, JavaScript files, meta tags, and more.
Usage: Place <?php wp_head(); ?> just before the closing </head> tag in your theme’s header.php file. 

-->