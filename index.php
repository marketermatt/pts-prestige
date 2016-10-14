<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Prestige
 */
get_header(); ?>

<div id="left"<?php content_style(); ?>>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
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
            <!-- Post Content -->
            <div class="entry">
                <?php if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('thumbnail',array('class'=>'post-thumb')); ?>
                    </a>
                <?php } ?>
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'pts' ), 'after' => '</div>' ) ); ?>
            </div>
                </div>

        <?php endwhile; ?>
        <!-- Post navigation -->
        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div>


    <?php else : ?>

        <h2 class="center"><?php _e('Not Found', 'pts' ); ?></h2>
        <p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.', 'pts' ); ?></p>
        <?php get_search_form(); ?>

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
      