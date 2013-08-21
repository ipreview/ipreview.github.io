<?php /* Template name: Home Page */ ?>  

<?php get_header(); ?>

<div id="content" class="wrapper content-container">
	
	<div class="home-responsive">
		<div class="sliderwrapper">
			<!-- <img class="phone" src="<?php // echo get_bloginfo('template_url') ?>/img/phone.png" alt="phone image"> -->
			<?php 
				$args = array(
							'post_type' => 'slides',
							'order' => 'ASC'
						);	
				
				$the_query = new WP_Query( $args );
				
				if ( $the_query->have_posts() ) :?>
				
				<div class="flexslider">
					<ul class="slides">
					
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li><?php the_post_thumbnail();?></li>
						<?php endwhile; ?>
				
					</ul><!-- .slides -->
				</div><!-- .flexslider -->
				
				<?php wp_reset_postdata(); // Reset Post Data?>
			<?php endif; ?>

		</div><!-- end sliderwrapper-->

		<!-- Description and download -->
		<div class="main-content">
			<h1 class="home-h"><?php echo get_theme_mod( 'intro-heading', $default); ?></h1>
			<p class="home-p"><?php echo get_theme_mod( 'intro-sententce', $default); ?></p>
			<div class="download">
				<div class="store-download clearfix">
					<?php if ( !get_theme_mod( 'Hide-appstore', $default ) ): ?>
						<a href="<?php echo get_theme_mod( 'appstore-link', $default); ?>" class="download-big download-appstore"></a>
					<?php endif; ?>
					<?php if ( !get_theme_mod( 'Hide-googleplay', $default ) ): ?>
						<a href="<?php echo get_theme_mod( 'googleplay-link', $default); ?>" class="download-big download-googleplay"></a>
					<?php endif; ?>
				</div>
				<div class="all-download clearfix">
					<?php if ( !get_theme_mod( 'Hide-ios', $default ) ): ?>
						<a href="<?php echo get_theme_mod( 'ios-link', $default); ?>" class="download-small download-ios"></a>
					<?php endif; ?>
					<?php if ( !get_theme_mod( 'Hide-android', $default ) ): ?>
						<a href="<?php echo get_theme_mod( 'android-link', $default); ?>" class="download-small download-android"></a>
					<?php endif; ?>
					<?php if ( !get_theme_mod( 'Hide-win', $default ) ): ?>
						<a href="<?php echo get_theme_mod( 'win-link', $default); ?>" class="download-small download-winphone"></a>
					<?php endif; ?>
					<?php if ( !get_theme_mod( 'Hide-ovi', $default ) ): ?>
						<a href="<?php echo get_theme_mod( 'ovi-link', $default); ?>" class="download-small download-symbian"></a>
					<?php endif; ?>
					<?php if ( !get_theme_mod( 'Hide-bb', $default ) ): ?>
						<a href="<?php echo get_theme_mod( 'bb-link', $default); ?>" class="download-small download-blackberry"></a>			
					<?php endif; ?>
				</div>
			</div> <!-- end download -->
		</div><!-- end main-content -->
	</div> <!-- end home-responsive-->

</div>

<?php get_footer(); ?>