<?php /* Template name: FAQ Page */ ?>  

<?php 

// List:
// page-faq.php
// inc/post-types.php ( require_once('inc/post-types.php'); )



get_header(); ?> 
	  
<?php query_posts('post_type=faq&order=ASC'); ?>

<div id="content" class="wrapper">  

	<?php 
		$i=1;
		if (have_posts()) :   
	?>  

	    <h1><?php echo get_theme_mod( 'faq-heading', $default); ?></h1>
    	<?php while (have_posts()) : the_post(); ?> 
			<dl class="faqs" >
				<dt>
					<img src="<?php echo get_template_directory_uri(); ?>/img/square.png">
					<?php the_title(); ?>
				</dt>	    	 
				<dd>
					<?php the_content(); ?>
				</dd>
			</dl>	        
        <?php endwhile; ?>
	<?php else : ?>  
	    <h1><?php _e('Not Found', 'saulsme' ); ?></h1>  
	    <p><?php _e('Sorry, Nothing created yet.', 'saulsme' ); ?></p>  
	<?php endif; ?> 
</div>

<script>

jQuery(function ($) {
	/* You can safely use $ in this code block to reference jQuery */
		$('.faqs dd').hide(); // Hide all DDs inside .faqs
		$('.faqs dt').click(function(){
			$(this).toggleClass('activefaq').next().slideToggle('normal'); // Toggle dd when the respective dt is clicked
		}); 
	
});

</script>


<?php get_footer(); ?> 