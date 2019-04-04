<?php
/*
 * Add menu to the Admin Control Panel
 */
 
 // Hook the 'admin_menu' action hook, run the function named 'me_Admin_Link()'
add_action( 'admin_menu', 'me_Admin_Link' );
 
// Add a new top level menu link to the ACP
function me_Admin_Link()
{
  add_menu_page(
        'My First Page', // Title of the page
        'My First Plugin', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'includes/me-first-acp-page.php' // The 'slug' - file to display when clicking the link
    );
}