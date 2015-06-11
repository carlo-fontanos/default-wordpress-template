<?php // Content Loop for Posts ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h2 class="entry-title"><?php _e( 'Not Found', 'wordpress' ); ?></h2>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'wordpress' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- post-0 -->
<?php endif; ?>


<?php // Run Content Loop ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php /* How to display posts of the Gallery Format. The Gallery Category is the old way */ ?>
	<?php if ( ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) || in_category( _x( 'gallery', 'gallery category slug', 'wordpress' ) ) ) : ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wordpress' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<div class="entry-meta">
				<?php wordpress_posted_on(); ?>
			</div><!-- .entry-meta -->

			<div class="entry-content">
				<?php if ( post_password_required() ) : ?>
					<?php the_content(); ?>
				<?php else : ?>
					<?php
                        $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
                        if ( $images ) :
                            $total_images = count( $images );
                            $image = array_shift( $images );
                            $image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
                    ?>
                        <div class="gallery-thumb">
                            <a class="size-thumbnail" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
                        </div><!-- .gallery-thumb -->
                        <p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'wordpress' ),
                                'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'wordpress' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
                                number_format_i18n( $total_images )
                            ); ?></em></p>
                    <?php endif; ?>
					<?php the_excerpt(); ?>
				<?php endif; ?>
			</div><!-- .entry-content -->

			<div class="entry-utility">
				<?php if ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) : ?>
                    <a href="<?php echo get_post_format_link( 'gallery' ); ?>" title="<?php esc_attr_e( 'View Galleries', 'wordpress' ); ?>"><?php _e( 'More Galleries', 'wordpress' ); ?></a>
                    <span class="meta-sep">|</span>
                <?php elseif ( in_category( _x( 'gallery', 'gallery category slug', 'wordpress' ) ) ) : ?>
                    <a href="<?php echo get_term_link( _x( 'gallery', 'gallery category slug', 'wordpress' ), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'wordpress' ); ?>"><?php _e( 'More Galleries', 'wordpress' ); ?></a>
                    <span class="meta-sep">|</span>
                <?php endif; ?>
                    <span class="comments-link"><?php comments_popup_link( __( 'Leave a Comment', 'wordpress' ), __( '1 Comment', 'wordpress' ), __( '% Comments', 'wordpress' ) ); ?></span>
                    <?php edit_post_link( __( '<strong>Edit Post</strong>', 'wordpress' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->
		</div><!-- post-## -->

<?php /* How to display posts of the Aside Format. The Asides Category is the old way */ ?>
	<?php elseif ( ( function_exists( 'get_post_format' ) && 'aside' == get_post_format( $post->ID ) ) || in_category( _x( 'asides', 'asides category slug', 'wordpress' ) )  ) : ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( is_archive() || is_search() ) : ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
            <?php else : ?>
                <div class="entry-content">
                    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wordpress' ) ); ?>
                </div><!-- .entry-content -->
            <?php endif; ?>

			<div class="entry-utility">
				<?php wordpress_posted_on(); ?>
				<span class="meta-sep">|</span>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a Comment', 'wordpress' ), __( '1 Comment', 'wordpress' ), __( '% Comments', 'wordpress' ) ); ?></span>
				<?php edit_post_link( __( '<strong>Edit Post</strong>', 'wordpress' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->
		</div><!-- post-## -->
        
<?php /* How to display all Other Posts */ ?>
	<?php else : ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
			<h2 class="entry-title">
            	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wordpress' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>

			<?php if ( is_archive() || is_search() ) : ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
                
                <div class="entry-meta">
					<?php wordpress_posted_on(); ?>
                </div><!-- .entry-meta -->
            <?php else : ?>
                <div class="entry-content">
                	<div class="post-image"><?php the_post_thumbnail('medium'); ?></div>
                    <?php the_content( __( 'Continue Reading <span class="meta-nav">&rarr;</span>', 'wordpress' ) ); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'wordpress' ), 'after' => '</div>' ) ); ?>
                </div><!-- .entry-content -->
            <?php endif; ?>

			<div class="entry-utility">
				<?php edit_post_link( __( '<strong>Edit Post</strong>', 'wordpress' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->
		</div><!-- post-## -->

		<?php comments_template( '', true ); ?>

	<?php endif; //this was the if statement that broke the loop into three parts based on categories ?>

<?php endwhile; //end content loop ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <div id="nav-below" class="navigation">
    	<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older Posts', 'wordpress' ) ); ?></div>
    	<div class="nav-next"><?php previous_posts_link( __( 'Newer Posts <span class="meta-nav">&rarr;</span>', 'wordpress' ) ); ?></div>
    </div><!-- nav-below -->
<?php endif; ?>
