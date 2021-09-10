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
 * The main class
 */



final class WpAcademy {
    
    /**
     *  plugin version
     */
  
     const version = '1.0';


    /**
     *  class constructor
     */
    
   private  function __construct() {
        


     }


     public static function init(){
         static $instance = false;

         if(!$instance){
             $instance = new self();
         }
         return $instance;
     }

     public function define_constant(){
         define('WP_ACADEMY_VERSION',self::version);
         define("WP_ACADEMY_FILE",__FILE__);
         define("WP_ACADEMY_PATH",__DIR__);
         define("WP_ACADEMY_URL",plugins_url('', WP_ACADEMY_FILE ));
         define("WP_ACADEMY_ASSETS",WP_ACADEMY_URL .'/assets');
     }

 }


/**
 * initialize the main plugin
 * @return  \WpAcademy
 */

 function wp_academy(){
     return WpAcademy::init();
 }
 // kick of the plugin
 wp_academy();