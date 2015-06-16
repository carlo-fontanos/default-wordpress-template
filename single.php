<?php get_header(); ?>

	<section class = "inner-page-wrapper">
		<section class = "container">		
			<section class = "row content">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>					
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</section>		
		</section>
	</section>
	
<?php get_footer(); ?>