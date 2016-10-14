<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Prestige
 
 Static Home Page and Blog: You will need to change the exclude= ID number 
 to the new home page ID so you don't end up with two home page menu items
 
 */
?>

<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>