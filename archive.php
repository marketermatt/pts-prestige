<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Persistence
 */

get_header(); ?>

<div id="left"<?php content_style(); ?>>
<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for the','pts'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','pts'); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php _e('Posts Tagged','pts'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for','pts'); ?> <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for','pts'); ?> <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for','pts'); ?> <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle"><?php _e('Author Archive','pts'); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle"><?php _e('Blog Archives','pts'); ?></h2>
 	  <?php } ?>


		

		<?php while (have_posts()) : the_post(); ?>
		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<!-- Date Posted by row -->
		<div id="metadata"><div>
			<?php $get_year = get_the_time('Y'); $get_month = get_the_time('m'); ?>
			<?php _e('Posted','pts'); ?> <a href="<?php echo get_month_link($get_year, $get_month); ?>"><?php the_time('M j Y') ?></a> <?php _e('by','pts'); ?> <?php the_author_posts_link(); ?>
					<?php if ( count(($categories=get_the_category())) > 1 || $categories[0]->cat_ID != 1 ) : ?>
						 <?php _e('in','pts'); ?> <?php the_category(', ') ?>
					<?php endif; ?>
			<?php _e('with','pts'); ?> <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
		</div></div>
<!-- Post Content -->
<div class="entry">
<?php the_content(); ?>
</div>


		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; '.__('Older Entries','pts')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries','pts').' &raquo;') ?></div>
		</div>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf(__('<h2 class=\'center\'>Sorry, but there aren\'t any posts in the %s category yet.</h2>','pts'), single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			_e('<h2>Sorry, but there aren\'t any posts with this date.</h2>','pts');
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf(__('<h2 class=\'center\'>Sorry, but there aren\'t any posts by %s yet.</h2>','pts'), $userdata->display_name);
		} else {
			_e('<h2 class=\'center\'>No posts found.</h2>','pts');
		}
		get_search_form();

	endif;
?>

</div>
      <?php if (is_active_sidebar('right-col')) { ?>
    <div id="right" style="width: 296px; float: left;">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?><?php endif; ?>
    </div>
    <?php } ?>

<?php get_footer(); ?>
