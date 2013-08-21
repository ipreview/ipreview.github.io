<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package AppStyle
 * @since AppStyle 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<article class="post error404 not-found">
				<h1>404</h1>
				<p><?php _e( 'Oops! Page not found.', 'saulsme' ); ?></p>
			</article><!-- #post-0 .post .error404 .not-found -->

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>