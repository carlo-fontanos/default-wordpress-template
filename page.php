<?php get_header(); ?>

	<div class = "inner-page-wrapper">
		<div class = "container">
			<div class = "content">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<article class="entry-content">
							<?php the_content(); ?>
						</article>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>