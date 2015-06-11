<?php get_header(); ?>

	<div id="content" role="main">
		<?php if ( have_posts() ) : ?>
            <h2 class="page-title">
                <?php if ( is_day() ) : ?>
                    <?php printf( __( 'Daily Archives: %s', 'wordpress' ), '<span>' . get_the_date() . '</span>' ); ?>
                <?php elseif ( is_month() ) : ?>
                    <?php printf( __( 'Monthly Archives: %s', 'wordpress' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'wordpress' ) ) . '</span>' ); ?>
                <?php elseif ( is_year() ) : ?>
                    <?php printf( __( 'Yearly Archives: %s', 'wordpress' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'wordpress' ) ) . '</span>' ); ?>
                <?php else : ?>
                    <?php _e( 'Blog Archives', 'wordpress' ); ?>
                <?php endif; ?>
            </h2>

			<?php //Run content loop ?>
			<?php rewind_posts(); get_template_part( 'content', 'archive' ); ?>
        <?php endif; ?>
	</div><!-- end content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>