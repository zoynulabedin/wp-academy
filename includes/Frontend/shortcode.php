<?php 

namespace Zoy\WpAcademy\Frontend;


/**
 * Shortcode handler class
 */

 class Shortcode  {
     
     /**
      * initialize the class
      */
     

     function __construct() {
        add_shortcode('wp-academy',[$this,'render_shortcode']);
     }

     
     /**
      * Shortcode handler Class
      * @param array atts
      * @param string content
      *
      * @return string
      */
     

     public function render_shortcode($atts, $content=''){
            return "Hello from shortcode";
     }
 }