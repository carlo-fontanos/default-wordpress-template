<?php
/**
 *	@class  		CVF_Theme
 * 
 *  @description 	Wordpress Theme Setup Functions
 *  @since	 		3.9.2
 *  @created		10/09/2014
 *	@author			Carl Victor Fontanos. (CVF)
 *	@authorurl		www.carlofontanos.com
 */

class CVF_Theme {
	
	/**
	 * Construct method and variables
	 * 
	 */
	public function __construct() {
		
		add_action( 'wp_enqueue_scripts', array( $this, 'cvf_custom_scripts' ) );
		add_action( 'after_setup_theme', array( $this, 'cvf_wordpress_setup' ) );
		add_action( 'widgets_init', array( $this, 'cvf_wordpress_widgets_init' ) );		
	
	}
	
	
	/**
	 * All custom JavaScripts goes here 
	 *
	 */
	public function cvf_custom_scripts() {
		
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3' );
		wp_enqueue_script( 'jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js', array('jquery'), '1.11.1' );
	
	}
	
	
	/**
	 * Put items that you want to execute when theme is activated
	 * 
	 */
	public function cvf_wordpress_setup() {
		
		register_nav_menus( array(
			'primary' 	=> __( 'Primary Navigation', 'CVF' ),
			'footer' 	=> __( 'Footer Navigation', 'CVF' )
		) );
		
		add_theme_support( 'post-formats', array( 'aside', 'image' ) );
		add_theme_support( 'post-thumbnails' );
		
	}
	
	
	/**
	 * Register sidebar items
	 * 
	 */
	public function cvf_wordpress_widgets_init() {

		register_sidebar( array(
			'name' 			=> __( 'Sidebar', 'CVF' ),
			'description' 	=> __( 'Add your sidebar items here, the other items can be found under Page > Sidebar', 'CVF' ),
			'id' 			=> 'sidebar-widget-area',		
		) );
				
	}

} new CVF_Theme;