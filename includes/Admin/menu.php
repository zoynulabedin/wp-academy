<?php

namespace Zoy\WpAcademy\Admin;


/**
 * Menu class handler
 */

 class Menu{
     function __construct() {
         add_action('admin_menu',[$this,'admin_menu']);
     }

     public function admin_menu(){
        add_menu_page( __('Wp Academy','wp-academy'), __('Academy','wp-academy'), 'manage_options', 'wp-academy',[$this,'plugin_page'],'dashicons-welcome-learn-more' );
     }
        public function plugin_page(){
            echo "hello world";
        }
 }