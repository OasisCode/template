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
	<div class="push"></div>
	</div><!-- end of wrapper (also includes header) -->
	
	<footer id="mastfooter" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'footer-menu' ) ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div> <!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
