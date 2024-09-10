<!-- 
 wp_nav_menu( array( 'theme_location' => 'primary' ) );
What it Does:

Purpose: Displays a navigation menu in your theme.
How It Works:

Function: wp_nav_menu() outputs a navigation menu that was registered in the theme. The theme_location parameter specifies which menu to display.
Usage: Place <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> where you want the menu to appear in your theme files (like header.php).
-->

<nav>
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>

<!-- 
theme_location: This should match the location registered in register_nav_menus() in your functions.php file.

Why It’s Useful:

Dynamic Menus: Allows you to manage navigation menus from the WordPress admin panel rather than hardcoding them, and displays them according to the registered menu location.
-->