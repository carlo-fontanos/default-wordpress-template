<?php
	// Template Name: One Column
	get_header(); 
?>

	<div id="content" class="one-column">        
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            	<h2 class="entry-title"><?php the_title(); ?></h2>
        
                <div class="entry-content">
                	<?php the_content(); ?>
                    <?php edit_post_link( __( '<strong>Edit Page</strong>', 'wordpress' ), '<span class="edit-link">', '</span>' ); ?>
                </div><!-- .entry-content -->
			</div><!-- post-## -->
        
			<?php comments_template( '', true ); ?>
		<?php endwhile; //end loop ?>
	</div>
    <!-- end content -->
    
<?php get_footer(); ?>
