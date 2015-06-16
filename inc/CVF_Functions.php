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

require_once( 'CVF_Theme.class.php' );
require_once( 'CVF_Users.class.php' );
require_once( 'CVF_Posts.class.php' );

/**
 * Use this function for debugging PHP array outputs
 *
 * @param String 	$a The variable or method to debug
 *
 */
function pr( $a ) {
    print( '<pre>' ); print_r( $a ); print( '</pre>' );
}

/**
 * Limits the numbers of words to be outputted from a text
 *
 * @param String 	$text 
 * @param Integer 	$limit
 * @return String
 *
 */
function limit_words( $text, $limit ) {
    $words = explode(" ",$text);
    return implode(" ",array_splice($words,0,$limit));
}

/**
 * Use this function if you need to generate a random hash code
 * Common usage is for: Email validation string, login authentication string
 *
 * @param Integer $length
 * @return String
 *
 */
function cvf_generate_random_code( $length = 10 ) {
 
   $string = '';
   $characters = "23456789ABCDEFHJKLMNPRTVWXYZabcdefghijklmnopqrstuvwxyz";
 
   for ($p = 0; $p < $length; $p++) {
       $string .= $characters[mt_rand(0, strlen( $characters )-1)];
   }
 
   return $string;
 
}