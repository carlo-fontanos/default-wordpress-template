<?php get_header(); ?>
	
	<div class="banner-wrapper">
		<div class="container">
			<div class="banner">
				
			</div>
		</div>
	</div>

	<div class="front-page-wrapper">
		<div class="container">
			<div class="content">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>					
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>