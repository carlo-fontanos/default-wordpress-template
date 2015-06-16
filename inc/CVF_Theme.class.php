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


$site_options = get_option('custom_site_options');

class CVF_Theme {
	
	/**
	 * Construct method and variables
	 * 
	 */
	public function __construct() {
		
		add_action( 'after_setup_theme', array( $this, 'cvf_wordpress_setup' ) );
		add_action( 'widgets_init', array( $this, 'cvf_wordpress_widgets_init' ) );
		add_action( 'admin_init', array( $this, 'cvf_site_options_init' ) );
		add_action( 'admin_menu', array( $this, 'cvf_site_options_add_page' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'cvf_site_options_enqueue_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'cvf_custom_scripts' ) );
	
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
	
	
	public function cvf_site_options_init(){
		
		register_setting( 'site_options', 'custom_site_options' );
	
	} 
	

	public function cvf_site_options_add_page() {
		
		add_theme_page( __( 'Site Options', 'CVF' ), __( 'Site Options', 'CVF' ), 'edit_theme_options', 'site_options', 'CVF_Theme::cvf_site_options_do_page' );
	
	}
	
	
	public static function cvf_site_options_do_page() { 

		global $select_options; 
		
		if ( ! isset( $_REQUEST['settings-updated'] ) ) 
			$_REQUEST['settings-updated'] = false; 
		
		?>
		
		<div class="wrap">
			<?php screen_icon(); echo "<h2>". __( 'Custom Site Options', 'CVF' ) . "</h2>"; ?>
			<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
				<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible"> 
					<p><strong><?php _e( 'Site Options Saved', 'CVF' ); ?></strong></p>
				</div>
			<?php endif; ?> 
		
			<form method="post" action="options.php">
			<?php settings_fields( 'site_options' ); ?>  
			<?php $options = get_option( 'custom_site_options' ); ?> 
			
				<table class="form-table">
					<tr valign="top">
						<th scope="row"><?php _e( 'Company Logo', 'CVF' ); ?></th>
						<td>
							<input id="custom_site_options[logourl]" type="text" name="custom_site_options[logourl]" value="<?php esc_attr_e( $options['logourl'] ); ?>" class="regular-text" />
							<input id="upload_logo_button" type="button" class="button" value="<?php _e( 'Upload Logo', 'CVF' ); ?>" />
							<div id="uplogo" style="margin:10px 0 0;"><?php echo ((isset($options['logourl']) && $options['logourl'] != "") ? "<img src=\"" . $options['logourl'] . "\" alt=\"\" />" : ""); ?></div>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row"><?php _e( 'Footer Description', 'CVF' ); ?></th>
						<td><input id="custom_site_options[footerdescription]" type="text" name="custom_site_options[footerdescription]" value="<?php esc_attr_e( $options['footerdescription'] ); ?>" class="regular-text" /></td>
					</tr>
				</table>
				<strong style="margin-top:10px; display:block;"><input type="submit" value="<?php _e( 'Save Site Options', 'CVF' ); ?>" class="button button-primary" /></strong>
			</form>
		</div><?php 
		
	}


	public function cvf_site_options_enqueue_scripts() {
		
		wp_register_script( 'image-upload',  get_template_directory_uri() .'/js/site-options.js', array('jquery','media-upload','thickbox') );

		if ( 'appearance_page_site_options' == get_current_screen() -> id ) {
			
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'thickbox' );
			wp_enqueue_script( 'media-upload' );
			wp_enqueue_script( 'image-upload' );
			
			wp_enqueue_style( 'thickbox');
			
		}
		
	}

} new CVF_Theme;