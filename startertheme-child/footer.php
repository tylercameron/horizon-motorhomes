<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package starterTheme
 */
?>

	</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
  			<div id="subsidiary">
    
<!-- BEGIN .footer-col-1 -->
    
    		<div class="footer-col" class="widget-area" role="complementary" >
        		<?php if ( ! dynamic_sidebar( 'footer-column' ) ) : ?>
    			<?php endif; // end sidebar widget area ?>
			</div>
       
    
<!-- END .footer-col-1 -->

<!-- BEGIN .footer-col-2 -->

	 		<div class="footer-col" class="widget-area" role="complementary" >
        		<?php if ( ! dynamic_sidebar( 'footer-column-2' ) ) : ?>
    			<?php endif; // end sidebar widget area ?>
			</div>

<!-- END .footer-col-2 -->

<!-- BEGIN .footer-col-3 -->

	 		<div class="footer-col" class="widget-area" role="complementary" >
        		<?php if ( ! dynamic_sidebar( 'footer-column-3' ) ) : ?>
    			<?php endif; // end sidebar widget area ?>
			</div>

<!-- END .footer-col-3 -->

<!-- BEGIN .footer-col-4 -->

	 		<div class="footer-col-last" class="widget-area" role="complementary" >
        		<?php if ( ! dynamic_sidebar( 'footer-column-4' ) ) : ?>
    			<?php endif; // end sidebar widget area ?>
			</div>

<!-- END .footer-col-4 -->
	
	<!-- BEGIN .footer-col-5 -->

	 		<div class="footer-col-full" class="widget-area" role="complementary" >
        		<?php if ( ! dynamic_sidebar( 'footer-column-5' ) ) : ?>
    			<?php endif; // end sidebar widget area ?>
			</div>

<!-- END .footer-col-5 -->
	
		
			<p style="clear:both;"></p>
		</div>
    	
        	<div id="siteInfo-container">
				<div class="site-info">
        			<div class="copyright">
						&copy; Horizon Motorhomes <?php echo date('Y'); ?>
					</div>
        			<div class="created">	
						SITE CREATED BY <a href="http://www.barefruit.com.au" target="_blank" >BAREFRUIT MARKETING</a>
            		</div>
					<p style="clear:both;"></p>
				</div><!-- .site-info -->
        	</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
