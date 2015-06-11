<section class = "footer-wrapper">
	<section class = "container">
		<section class  ="col-md-12">
			<section class = "row footer">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<cite>Copyright &copy; <a href="<?php echo home_url('/'); ?>"><?php bloginfo( 'name' ); ?></a>, <?php echo date('Y'); ?>. All Rights Reserved.</cite>
			</section>
		</section>
	</section>
</section>

<?php wp_footer(); ?>
</body>
</html>



