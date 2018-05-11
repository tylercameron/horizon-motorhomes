<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Startertheme
 */

?>

<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
	
		<div class="entry-meta">
			<?php startertheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'startertheme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'startertheme' ),
				'after'  => '</div>',
			) );
		?>
			<footer class="entry-footer">
		<?php startertheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	</div><!-- .entry-content -->

</article><!-- #post-## -->
