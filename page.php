<?php get_header(); ?>

	<section class = "inner-page-wrapper">
		<section class = "container">
			<section class  ="col-md-12">
				<section class = "row content">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h1><?php the_title(); ?></h1>
							<article class="entry-content">
								<?php the_content(); ?>
								<?php edit_post_link( __( '<strong>Edit Page</strong>', 'wordpress' ), '<span class="edit-link">', '</span>' ); ?>
							</article>
						</article>
					<?php endwhile; ?>
				</section>
			</section>
		</section>
	</section>
	
<?php get_footer(); ?>