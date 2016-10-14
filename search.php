<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Persistence
 */

get_header(); ?>

<div id="left" <?php //content_style(); ?>>

    <?php if (have_posts()) : ?>

    <h2 class="pagetitle"><?php _e('Search Results', 'pts' ); ?></h2>

<?php while (have_posts()) :
the_post(); ?>

    <div <?php post_class() ?>>
        <h1><a href="<?php the_permalink() ?>" rel="bookmark"
               title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <!-- Date Posted by row -->
        <div id="metadata">
            <div>
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

        <div class="entry">
            <?php the_excerpt(); ?>
        </div>

        <a class="readon" href="<?php the_permalink(); ?>"><?php _e('Continue...', 'pts' ); ?></a>

        <?php endwhile; ?>

        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; '.__('Older Entries', 'pts' )) ?></div>
            <div class="alignright"><?php previous_posts_link(__('Newer Entries', 'pts' ).' &raquo;') ?></div>
        </div>

        <?php else : ?>

            <h2 class="center"><?php _e('No posts found. Try a different search?','pts'); ?></h2>

        <?php
        endif; ?>

    </div>
    </div>

    <?php get_footer(); ?>
