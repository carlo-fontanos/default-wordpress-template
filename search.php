<?php get_header(); ?>

	<section class = "inner-page-wrapper">
		<section class = "container">
			<section class = "row content">	

				<?php if ( have_posts() ) : ?>

					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'cvftheme' ), get_search_query() ); ?></h1>
					
					<?php while ( have_posts() ) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<header class="entry-header">
								<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							</header>

							<div class="entry-summary">
								<?php the_excerpt(); ?>
							</div>

							<?php if ( 'post' == get_post_type() ) : ?>

								<footer class="entry-footer">
									<?php edit_post_link( __( 'Edit', 'cvftheme' ), '<span class="edit-link">', '</span>' ); ?>
								</footer>

							<?php else : ?>

								<?php edit_post_link( __( 'Edit', 'cvftheme' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>

							<?php endif; ?>

						</article>


					<?php endwhile;

					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'cvftheme' ),
						'next_text'          => __( 'Next page', 'cvftheme' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'cvftheme' ) . ' </span>',
					) );
					
					?>
				
				<?php else : ?>				
					<section class="no-results not-found">
						<h1 class="page-title"><?php _e( 'Nothing Found', 'cvftheme' ); ?></h1>
						
						<div class="page-content">

							<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

								<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'cvftheme' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

							<?php elseif ( is_search() ) : ?>

								<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cvftheme' ); ?></p>
								<?php get_search_form(); ?>

							<?php else : ?>

								<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cvftheme' ); ?></p>
								<?php get_search_form(); ?>

							<?php endif; ?>

						</div>
					</section>
				<?php endif; ?>

			</section>
		</section>
	</section>

<?php get_footer(); ?>
