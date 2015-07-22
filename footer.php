<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package JaySussman
 */

?>
	</div><!-- #content -->
	
	<footer id="mastfooter" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'footer-menu' ) ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
