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
        $parent_slug = 'wp-academy';
        $capability = 'manage_options';
        add_menu_page( __('Wp Academy','wp-academy'), __('Academy','wp-academy'), $capability, $parent_slug,[$this,'wp_academy_plugin_page'],'dashicons-welcome-learn-more' );
        add_submenu_page($parent_slug, __('Address Book','wp-academy'),__('Address Book','wp-academy'), $capability, 'wp-academy-address-book', [$this,'addressbook_page']);
        add_submenu_page($parent_slug, __('Settings','wp-academy'),__('Settings','wp-academy'), $capability, 'wp-academy-settings', [$this,'addressbook_settings']);
        
     }
        public function wp_academy_plugin_page(){
            $addressbook = new Addressbook();
            $addressbook->plugin_page();
        }
        public function addressbook_page(){
           
        }
        public function addressbook_settings(){
            echo "Settings";
        }
 }