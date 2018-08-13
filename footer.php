<div class="footer-wrapper">
	<div class="container">
		<div class="footer">
			<div><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
			<div><?php _e('Copyright', 'my-text-domain'); ?> &copy; <a href="<?php echo home_url('/'); ?>"><?php bloginfo( 'name' ); ?></a>, <?php echo date('Y'); ?>. <?php _e('All Rights Reserved', 'my-text-domain'); ?>.</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>



