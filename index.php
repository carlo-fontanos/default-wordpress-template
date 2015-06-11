<?php 
	// The Main Template 
	get_header(); 
?>
	
	<div id="content">
    	<?php get_template_part( 'content', 'index' ); ?>
	</div><!-- end content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
