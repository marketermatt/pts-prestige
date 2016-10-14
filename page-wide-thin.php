<?php
/**
 * Template Name: Page Wide Medium
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Prestige
 */
get_header(); ?>

<div id="left"<?php content_style(); ?>>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
			<div class="entry">
						<?php the_content(); ?>
						<div class="clearboth"></div>
					</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry', 'pts' ),'[',']'); ?>
	
	<!-- Comments -->
<div id="commentswrapper">
	<?php comments_template(); ?>
</div>

</div>

<?php if (is_active_sidebar('right-col')) { ?>
    <div id="right" style="width: 296px; float: left;">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?><?php endif; ?>
    </div>
<?php } ?>
	

<?php get_footer(); ?>