<?php /* Template name: Features Page */ ?>  

<?php get_header(); ?>

<?php query_posts('post_type=features&order=ASC'); ?>

<div id="content" class="wrapper">  

	<?php 
		$i=1;
		if (have_posts()) :   
	?>  

    	<?php while (have_posts()) : the_post(); ?> 
    		
    		<?php if ($i%2 == 0): ?>
				<div class="feature-even" >
			<?php else: ?>
				<div class="feature-odd" >
			<?php endif; ?>
					<div class="feature-content clearfix">
						<h2><?php the_title(); ?></h2>
						<div class="feature-image"><?php the_post_thumbnail();?></div>
						<p><?php the_content(); ?></p>
					</div>
				</div>
				<div class="divider"></div>
        <?php 
        	$i++;
        	endwhile; 
        ?>  
	<?php else : ?>  
	    <h1><?php _e('Not Found', 'saulsme' ); ?></h1>  
	    <p><?php _e('Sorry, Nothing created yet.', 'saulsme' ); ?></p>  
	<?php endif; ?> 


<?php get_footer(); ?> 
