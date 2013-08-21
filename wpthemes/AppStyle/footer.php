<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package AppStyle
 * @since AppStyle 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer  wrapper" role="contentinfo">

		<div class="footer-widget-area clearfix">
			<?php
				if (function_exists('dynamic_sidebar')){
					dynamic_sidebar( 'footer-widgets-left' );
				}
			?>
			<?php
				if (function_exists('dynamic_sidebar')){
					dynamic_sidebar( 'footer-widgets-right' );
				}
			?>
		</div>
		<div class="site-info">
			<?php do_action( 'saulsme_credits' ); ?>

			<p><?php echo get_theme_mod( 'copyright_text', $default); ?></p>
			<!-- <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'saulsme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'saulsme' ), 'WordPress' ); ?></a> -->
			<!-- <span class="sep"> | </span> -->
			<?php // printf( __( 'Theme: %1$s by %2$s.', 'saulsme' ), 'AppStyle', '<a href="http://sauls.me/" rel="designer">Saul S</a>' ); ?>

		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>