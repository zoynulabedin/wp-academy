<?php 
/*
Plugin Name: Wp Academy
Description: learning purpse
Plugin URI: www.zoynul.com
Author: zoynul
Author URI:zoynul.com
Version:1.0
License:GPL2 or later
Text Domain: wp-academy
Domain Path: /lang
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}



/**
 * The main
 */

Final class WPAcademy {
    private function __construct() {
       
     }

     public static function init(){
         static $instance =  false;

         if(!$instance){
             $instance = new self();
         }
         return $instance;
     }

/**
 * plugin initilizes
 * @return \WpAcademy
 */

     function wp_academy(){
        WPAcademy::init();
     }
 }