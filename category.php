<?php get_header(); ?>

	<div id="content" role="main">
		<h2 class="page-title">
			<?php printf( __( 'Category: %s', 'wordpress' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
        </h2>
		
		<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) )
				echo '<div class="archive-meta">' . $category_description . '</div>';

			//Run content loop for the category page to output the posts 
			get_template_part( 'content', 'category' );
		?>
	</div><!-- end content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
