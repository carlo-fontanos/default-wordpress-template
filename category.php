<?php get_header(); ?>
	
	<section class = "inner-page-wrapper">
		<section class = "container">
			<section class = "row content">
				<h2 class="page-title">
					<?php printf( __( 'Category: %s', 'my-text-domain' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				</h2>
	
				<?php if ( ! empty( category_description() ) ): ?>
					<div class="category-description"><?php echo category_description(); ?></div>
				<?php endif; ?>
			
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'my-text-domain' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h2>

						<div class="entry-content">
							<div class="post-image"><?php the_post_thumbnail('medium'); ?></div>
							<?php the_content( __( 'Continue Reading <span class="meta-nav">&rarr;</span>', 'my-text-domain' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'my-text-domain' ), 'after' => '</div>' ) ); ?>
						</div>
						
						<div class="entry-utility">
							<?php edit_post_link( __( '<strong>Edit Post</strong>', 'my-text-domain' ), '<span class="edit-link">', '</span>' ); ?>
						</div>
					</div>
				<?php endwhile; ?>
				
			</section>
		</section>
	</section>

<?php get_footer(); ?>
