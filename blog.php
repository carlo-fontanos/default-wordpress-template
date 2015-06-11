<?php
	// Template Name: Blog Posts
	get_header(); 
?>

	<div id="content">
		<h2 class="entry-title"><?php the_title(); ?></h2>
        
		<?php 
			if (have_posts()) : $my_query = new WP_Query('category_name=uncategorized&posts_per_page=10'); 
			//You can specify the category to display as your blog posts by changing category_name value above  
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; 
		?>
        	<div id="post-<?php the_ID(); ?>" <?php post_class('alternate clearfix'); ?>>
            	<div class="post-image post-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                </div>
                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
                <div class="entry-utility">
					<?php wordpress_posted_on(); ?> |
                    <span class="comments-link"><?php comments_popup_link( __( 'Leave a Comment', 'wordpress' ), __( '1 Comment', 'wordpress' ), __( '% Comments', 'wordpress' ) ); ?></span>
                    <?php edit_post_link( __( '<strong>Edit Post</strong>', 'wordpress' ), '| <span class="edit-link">', '</span>' ); ?>
                </div><!-- .entry-utility -->
			</div><!-- post-## -->                    
		<?php endwhile; endif; //end loop ?>
        
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
            <div id="nav-below" class="navigation">
                <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older Posts', 'wordpress' ) ); ?></div>
                <div class="nav-next"><?php previous_posts_link( __( 'Newer Posts <span class="meta-nav">&raquo;</span>', 'wordpress' ) ); ?></div>
            </div><!-- nav-below -->
        <?php endif; ?>
	</div>
    <!-- end content -->
    
    <?php get_sidebar(); ?>
    
<?php get_footer(); ?>
