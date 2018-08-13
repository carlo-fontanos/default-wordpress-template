<?php get_header(); ?>

	<div class="inner-page-wrapper">
		<div class="container">
			<div class="content">	
				<?php if ( have_posts() ) : ?>
					<h2 class="page-title">
						<?php if ( is_day() ) : ?>
							<?php printf( __( 'Daily Archives: %s', 'my-text-domain' ), '<span>' . get_the_date() . '</span>' ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( __( 'Monthly Archives: %s', 'my-text-domain' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'my-text-domain' ) ) . '</span>' ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( __( 'Yearly Archives: %s', 'my-text-domain' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'my-text-domain' ) ) . '</span>' ); ?>
						<?php else : ?>
							<?php _e( 'Blog Archives', 'my-text-domain' ); ?>
						<?php endif; ?>
					</h2>

					<?php rewind_posts(); ?>
					
					<?php while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'my-text-domain' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h2>
							
							<?php if ( is_archive() || is_search() ) : ?>
								<div class="entry-summary">
									<?php the_excerpt(); ?>
								</div>	
							<?php endif; ?>
							
							<div class="entry-utility">
								<?php edit_post_link( __( '<strong>Edit Post</strong>', 'my-text-domain' ), '<span class="edit-link">', '</span>' ); ?>
							</div>
						</div>
					<?php endwhile; ?>			
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>