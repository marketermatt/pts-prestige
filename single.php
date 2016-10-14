<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Prestige
 */

get_header(); ?>




    <div id="left"<?php content_style(); ?>><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><a href="<?php the_permalink() ?>" rel="bookmark"
                   title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <!-- Date Posted by row -->
            <div id="metadata">
                <div id="metadata2">
                    <?php $get_year = get_the_time('Y');
                    $get_month = get_the_time('m'); ?>
                    <?php _e('Posted', 'pts' ); ?> <a href="<?php echo get_month_link($get_year, $get_month); ?>"><?php the_time('M j Y') ?></a>
                    <?php _e('by', 'pts' ); ?> <?php the_author_posts_link(); ?>
                    <?php if (count(($categories = get_the_category())) > 1 || $categories[0]->cat_ID != 1) : ?>
                        <?php _e('in', 'pts' ); ?> <?php the_category(', ') ?>
                    <?php endif; ?>
                    <?php _e('with', 'pts' ); ?> <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
                </div>
            </div>
            <!-- Post Content -->
            <div class="entry">
                <?php the_content(); ?>
            </div>
            <?php edit_post_link('Edit this entry', '[', ']'); ?>
            <div class="clearboth"></div>
            <?php the_tags(__('<p>Tags:','pts') , ', ', '</p>'); ?>



            <div class="navigation">
                <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
                <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
            </div>
        <?php endwhile;
        else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.', 'pts' ); ?></p>
        <?php endif; ?>
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