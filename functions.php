<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Prestige
 */

// Add a text domain
add_action('init', 'prestige_setup');
function prestige_setup()
{
    load_theme_textdomain('pts', get_template_directory() . '/languages');
}

// add feed links to header
add_theme_support( 'automatic-feed-links' );

// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );
	
// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'pts' ),
	) );

function prestige_widgets_init(){
	 // Right Sidebar replaces default sidebar
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Right Sidebar', // The sidebar name to register
          'id' => 'right-col',
		  'description'   => __('Right Sidebar', 'pts' ),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '</div></div>',
          'before_title' => '<div class="right"><h3>',
          'after_title' => '</h3>',
     ));
	 // Left Column	
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Left Column', // The sidebar name to register
          'id' => 'left-col',
		  'description'   => __('left column', 'pts' ),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h2>',
          'after_title' => '</h2>',
     ));
	 // Logo
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Logo', // The sidebar name to register
		  'description'   => __('Leave the Title empty', 'pts' ),
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => '',
     ));
	 // Top
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Top', // The sidebar name to register
		  'description'   => __('For full width content in the top header area', 'pts' ),
          'before_widget' => '<div id="topwidget">',
          'after_widget' => '</div>',
          'before_title' => '<h1>',
          'after_title' => '</h1>',
     ));
	 // Top Widgets 1 and 2 with collapsible container - no background container
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Widget One',
		  'description'   => __('Use for Captions or section descriptions', 'pts' ),
          'before_widget' => '<div id="caption">',
          'after_widget' => '</div>',
          'before_title' => '<h1>',
          'after_title' => '</h1>',
     ));
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Widget Two',
		  'description'   => __('Use for media content but leave the Title empty', 'pts' ),
          'before_widget' => '<div id="media">',
          'after_widget' => '</div>',
          'before_title' => '',
          'after_title' => '',
     ));	 
  	 // Bottom Widgets 3 4 and 5 with dark background collapsible container
	 if (function_exists('register_sidebar')) {
		register_sidebar(array(
		'name' => 'Widget Three',
		'id'   => 'widget-three',
		'description'   => __('Bottom left widget in dark background', 'pts' ),
		'before_widget' => '<div class="lighttop"><div class="lightbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
		register_sidebar(array(
		'name' => 'Widget Four',
		'id'   => 'widget-four',
		'description'   => __('Bottom left widget in dark background', 'pts' ),
		'before_widget' => '<div class="lighttop"><div class="lightbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
		register_sidebar(array(
		'name' => 'Widget Five',
		'id'   => 'widget-five',
		'description'   => __('Bottom left widget in dark background', 'pts' ),
		'before_widget' => '<div class="lighttop end"><div class="lightbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	} 
	 // Bottom Widgets 6 7 and 8 with light background collapsible container
	 if (function_exists('register_sidebar')) {
		register_sidebar(array(
		'name' => 'Widget Six',
		'id'   => 'widget-six',
		'description'   => __('Bottom left widget in light background', 'pts' ),
		'before_widget' => '<div class="mediumtop"><div class="mediumbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
		register_sidebar(array(
		'name' => 'Widget Seven',
		'id'   => 'widget-seven',
		'description'   => __('Bottom left widget in light background', 'pts' ),
		'before_widget' => '<div class="mediumtop"><div class="mediumbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
		register_sidebar(array(
		'name' => 'Widget Eight',
		'id'   => 'widget-eight',
		'description'   => __('Bottom left widget in light background', 'pts' ),
		'before_widget' => '<div class="mediumtop end"><div class="mediumbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	}
	// Bottom Widgets 9 10 and 11 with medium dark background collapsible container
	 if (function_exists('register_sidebar')) {
		register_sidebar(array(
		'name' => 'Widget Nine',
		'id'   => 'widget-nine',
		'description'   => __('Bottom left widget in medium dark background', 'pts' ),
		'before_widget' => '<div class="darktop"><div class="darkbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
		register_sidebar(array(
		'name' => 'Widget Ten',
		'id'   => 'widget-ten',
		'description'   => __('Bottom left widget in medium dark background', 'pts' ),
		'before_widget' => '<div class="darktop"><div class="darkbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
		register_sidebar(array(
		'name' => 'Widget Eleven',
		'id'   => 'widget-eleven',
		'description'   => __('Bottom left widget in medium dark background', 'pts' ),
		'before_widget' => '<div class="darktop end"><div class="darkbottom"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	}
	 // Footer
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Footer', // The sidebar name to register
		  'description'   => __('Use this area for footer menu - Leave Title Blank', 'pts' ),
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));
	 // Copyright	
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Copyright', // The sidebar name to register
		  'description'   => __('Copyright widget for info - Leave Title Blank', 'pts' ),
          'before_widget' => '<div class="widget">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));
}
add_action( 'widgets_init', 'prestige_widgets_init' );
	 
	 
	 
// Changes the excerpt ending style
function new_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'new_excerpt_more');

// Below is custom read more link for articles
	add_filter( 'the_content_more_link', 'my_more_link', 10, 2 );

function my_more_link( $more_link, $more_link_text ) {
	return str_replace( $more_link_text, __('Continue...', 'pts' ), $more_link );
} 

// This is for the breadcrumbs without the need of a plugin
	 
function the_breadcrumb() {
    if (!is_home()) {
        echo '<a href="';
        echo home_url();
        echo '">';
        bloginfo('name');
        echo "</a> &raquo; ";
        if (is_category() || is_single()) {
            $category = get_the_category();
            $firstCategory = $category[0]->cat_name;
            $category_link = get_category_link( $category[0]->cat_ID );
            echo '<a href="'.$category_link.'">'.$firstCategory.'</a>';
            if (is_single()) {
                echo " &raquo; ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
}

function content_style(){
    if(is_active_sidebar( 'right-col' )){
        echo ' style="width: 610px; float: left;"';
    }
}

function pts_comment_callback($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    switch ($comment->comment_type) :
        case '' :
            ?>
            <div <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <div class="commentgroup">
                    <div id="comment-<?php comment_ID(); ?>">
                        <div class="cmeta">
                            <?php echo get_avatar($comment, 40); ?><?php printf(__('%s', 'pts'), sprintf('<span class="cname">%s</span>', get_comment_author_link())); ?>
                            <br/>
	<span class="cdate">Commented:&nbsp;<a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
            <?php
            /* translators: 1: date, 2: time */
            printf(__('%1$s at %2$s', 'pts'), get_comment_date(), get_comment_time()); ?></a>(<?php edit_comment_link(__('Edit', 'pts'), ' ');
        ?>)</div>
                        </span>
                        <?php if ($comment->comment_approved == '0') : ?>
                            <div class="cmoderation">
                                <?php _e('Your comment is awaiting moderation.', 'pts'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="comment-body"><?php comment_text(); ?></div>
                        <div
                            class="reply"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div>


                    </div>
                </div>
                <!-- #comment-##  -->
            </div>
            <?php
            break;
        case 'pingback'  :
        case 'trackback' :
            ?>
            <li class="post pingback">
            <p><?php _e('Pingback:', 'pts'); ?> <?php comment_author_link(); ?>(<?php edit_comment_link(__('Edit', 'pts'), ' '); ?>)</p>
            <?php
            break;
    endswitch;
}

function persistence_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= ' '.get_bloginfo( 'name' );

    //if is normal page or post


    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'persistence' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'persistence_wp_title', 10, 2 );

if ( ! isset( $content_width ) ) $content_width = 610;

define('HEADER_IMAGE_WIDTH', 500);
define('HEADER_IMAGE_HEIGHT', 210);
define( 'NO_HEADER_TEXT', true );
$args = array('width'=>HEADER_IMAGE_WIDTH,'height'=>HEADER_IMAGE_HEIGHT,);
add_theme_support( 'custom-header', $args );

function prestige_theme_add_editor_styles()
{
    add_editor_style(get_stylesheet_directory_uri() . '/editor.css');
}
add_action('after_setup_theme', 'prestige_theme_add_editor_styles');