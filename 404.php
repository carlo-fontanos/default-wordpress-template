<?php get_header(); ?>

	<section class = "inner-page-wrapper">
		<section class = "container">
			<section class = "row content">				
				<h1><?php _e( 'Epic 404 - Article Not Found', 'my-text-domain' ); ?></h1>
				<p><?php _e( 'The article you were looking for was not found, but maybe try searching below!', 'my-text-domain' ); ?></p>
				<?php get_search_form(); ?>
			</section>
		</section>
	</section>
	
<?php get_footer(); ?>