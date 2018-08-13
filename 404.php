<?php get_header(); ?>

	<div class = "inner-page-wrapper">
		<div class = "container">
			<div class = "content">				
				<h1><?php _e( 'Epic 404 - Article Not Found', 'my-text-domain' ); ?></h1>
				<p><?php _e( 'The article you were looking for was not found, but maybe try searching below!', 'my-text-domain' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>