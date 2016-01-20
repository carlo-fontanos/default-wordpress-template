<section class = "footer-wrapper">
	<section class = "container">
		<section class  ="col-md-12">
			<section class = "row footer p-d">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<cite><?php _e('Copyright', 'cvftheme'); ?> &copy; <a href="<?php echo home_url('/'); ?>"><?php bloginfo( 'name' ); ?></a>, <?php echo date('Y'); ?>. <?php _e('All Rights Reserved', 'cvftheme'); ?>.</cite>
			</section>
		</section>
	</section>
</section>

<?php wp_footer(); ?>
</body>
</html>



