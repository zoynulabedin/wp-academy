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
        $this->define_constant();

        register_activation_hook(WP_ACADEMY_FILE, [$this,'activate'] );


     }


     public static function init(){
         static $instance = false;

         if(!$instance){
             $instance = new self();
         }
         return $instance;
     }
/**
 * plugin contstant deinfend
 */
     public function define_constant(){
         define('WP_ACADEMY_VERSION',self::version);
         define("WP_ACADEMY_FILE",__FILE__);
         define("WP_ACADEMY_PATH",__DIR__);
         define("WP_ACADEMY_URL",plugins_url('', WP_ACADEMY_FILE ));
         define("WP_ACADEMY_ASSETS",WP_ACADEMY_URL .'/assets');
     }

    /*
    * plugin activation
     */

     public function activate(){
         $installded = get_option( "wp_academy_installed" );
         if(!$installded){
            update_option( 'wp_academy_installed', time() );
         }
         update_option( 'wp_academy_version', WP_ACADEMY_VERSION);
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