<?php
/**
 *
 * 
 *  @description 	Useful site wide functions
 *  @since	 		3.9.2
 *  @created		10/09/2014
 *	@author			Carl Victor Fontanos. (CVF)
 *	@authorurl		www.carlofontanos.com
 */

require_once('CVF_Theme.class.php');
require_once('CVF_Users.class.php');
require_once('CVF_Posts.class.php');


function pr( $a ) {
    print( '<pre>' ); print_r( $a ); print( '</pre>' );
}


function limit_words($text, $limit) {
    $words = explode(" ",$text);
    return implode(" ",array_splice($words,0,$limit));
}


add_action('wp_enqueue_scripts', 'cvf_load_scripts');
function cvf_load_scripts() {

	wp_enqueue_script('jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js', array('jquery'), '1.11.1');

}

 
function cvf_output_errors($errors) {

	foreach ($errors as $error) {
		return '<p class = "bg-danger">' . $error . '</p>';
	}
}


function cvf_retrieve_input($input) {

	if ($_POST) { 
	
		$data = $_REQUEST[$input];
		
		if ($input != '') { 
			echo $data; 
		}
	}
}


function cvf_generate_random_code($length=10) {
 
   $string = '';
   $characters = "23456789ABCDEFHJKLMNPRTVWXYZabcdefghijklmnopqrstuvwxyz";
 
   for ($p = 0; $p < $length; $p++) {
       $string .= $characters[mt_rand(0, strlen($characters)-1)];
   }
 
   return $string;
 
}


function cvf_contains($text, $word) {
		
	$patt = "/(?:^|[^a-zA-Z])" . preg_quote($word, '/') . "(?:$|[^a-zA-Z])/i";		
	return preg_match($patt, $text);
	
}


function cvf_validate_value($value) {
	
	if($value){
		return $value;
	} else {
		return 'N/A';
	}
	
}