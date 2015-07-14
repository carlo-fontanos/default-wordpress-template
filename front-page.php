<?php get_header(); ?>
	
	<?php if(is_front_page()): ?>
		<section class = "banner-wrapper">
			<section class = "container">
				<section class  ="col-md-12">
					<section class = "row banner">
						
					</section>
				</section>
			</section>
		</section>
	<?php endif; ?>

	<section class = "front-page-wrapper">
		<section class = "container">
			<section class  ="col-md-12">
				<section class = "row content">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>					
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</section>
			</section>
		</section>
	</section>
	
<?php get_footer(); ?>