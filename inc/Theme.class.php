<?php
/**
 *	@class  		Theme
 * 
 *  @description 	Wordpress Theme Setup Functions
 *  @since	 		3.9.2
 *  @created		10/09/2014
 *	@author			Carl Victor Fontanos. (CVF)
 *	@authorurl		www.carlofontanos.com
 */

class Theme {
	
	/**
	 * Construct method and variables
	 * 
	 */
	public function __construct() {
		
		add_action( 'wp_enqueue_scripts', array( $this, 'custom_scripts' ) );
		add_action( 'after_setup_theme', array( $this, 'wordpress_setup' ) );
		add_action( 'widgets_init', array( $this, 'wordpress_widgets_init' ) );		
	
	}
	
	
	/**
	 * All custom JavaScripts goes here 
	 *
	 */
	public function custom_scripts() {
		
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3' );
		wp_enqueue_script( 'jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js', array('jquery'), '1.11.1' );
	
	}
	
	
	/**
	 * Put items that you want to execute when theme is activated
	 * 
	 */
	public function wordpress_setup() {
		
		register_nav_menus( array(
			'primary' 	=> __( 'Primary Navigation', 'my-text-domain' ),
			'footer' 	=> __( 'Footer Navigation', 'my-text-domain' )
		) );
		
		add_theme_support( 'post-formats', array( 'aside', 'image' ) );
		add_theme_support( 'post-thumbnails' );
		
	}
	
	
	/**
	 * Register sidebar items
	 * 
	 */
	public function wordpress_widgets_init() {

		register_sidebar( array(
			'name' 			=> __( 'Sidebar', 'my-text-domain' ),
			'description' 	=> __( 'Add your sidebar items here, the other items can be found under Page > Sidebar', 'my-text-domain' ),
			'id' 			=> 'sidebar-widget-area',		
		) );
				
	}

} new Theme;