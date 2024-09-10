<?php

wp_nav_menu(array(
    "theme_location" => "primary",
    "container" => "nav",
    "container_class" => "primary-menu",
    "menu_class" => "menu",
));

/*
What the Code Does
Display a Navigation Menu (wp_nav_menu):

wp_nav_menu: This function is used to display a navigation menu in your theme.

Function Parameters:
'theme_location' => 'primary':

'theme_location': This specifies which menu location to display.
'primary': This refers to the menu location registered in your theme (from the register_nav_menus function). It tells WordPress to show the menu assigned to this location.
'container' => 'nav':

'container': This specifies the HTML element that will wrap the menu.
'nav': This means the menu will be enclosed in a <nav> HTML element, which is used for navigation links.

'container_class' => 'primary-menu':
'container_class': This adds a CSS class to the container element (<nav> in this case).
'primary-menu': This is the name of the CSS class that will be applied to the <nav> element, allowing you to style it with CSS.

'menu_class' => 'menu':
'menu_class': This adds a CSS class to the <ul> element that contains the menu items.
'menu': This is the name of the CSS class that will be applied to the <ul> element, allowing you to style the list of menu items.

In Summary
Purpose: The code displays a navigation menu on your website.
How It Works:
Shows the menu assigned to the "primary" location.
Wraps the menu in a <nav> element with a class of "primary-menu".
Styles the menu items list with a class of "menu".

*/
?>