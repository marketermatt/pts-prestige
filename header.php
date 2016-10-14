<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Prestige
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
<div id="top">
  <div id="logo">
    <a href="<?php echo home_url(); ?>"> <h1><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Logo')) : ?><?php bloginfo('name'); ?><?php endif; ?></h1></a>
  </div>
  <div id="navwrapper">
<?php get_template_part('navigation','index'); ?>  <?php // if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Menu')) : ?><?php // endif; ?>
  </div>
</div>
<div id="wrapper">
 <div id="headerwrapper" class="clearfix">
    <div id="header">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Top')) : ?><?php endif; ?>
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget One')) : ?><?php endif; ?>
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Two')) : ?>
        <div id="media"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></div>
	<?php endif; ?>
	</div>
    <div id="content">
      <div id="breadcrumbwrapper">
        <div id="breadcrumbs"><?php get_template_part('breadcrumbs','index'); ?></div>
	    <div id="searchwrapper">
<form method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>/">
<input type="text" name="s" id="s" value="Search.." onfocus="if(this.value == 'Search..') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search..';}"/>
<input type="submit"  value="Search" id="searchsubmit" class="button" /> 
</form></div>
      </div>
      <div id="mainbody">
