<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Startertheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div id="effect" class="effects clearfix">
        	<div>
                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'news-thumbnail'); ?></a>
            </div>
        </div>
        
        <p class="date"><?php the_date(); ?> </p>

		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<p class="excerpt"><?php the_excerpt(); ?></p>

</article><!-- #post-## -->
