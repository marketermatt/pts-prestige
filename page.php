<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2010 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Prestige
 */

get_header(); ?>

<div id="wide">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
			<div class="entry">
						<?php the_content(); ?>

                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'pts' ), 'after' => '</div>' ) ); ?>
						<div class="clearboth"></div>
					</div>
		</div>
		<?php endwhile; endif; ?>
	
	
	<!-- Comments -->
<div id="commentswrapper">
	<?php comments_template(); ?>
</div>
	
	</div>
	

<?php get_footer(); ?>