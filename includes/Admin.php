<?php 

namespace Zoy\WpAcademy;



/**
 * The admin class
 */

 class Admin {
     function __construct() {
         $this->dispatch_action();
         new Admin\Menu();
     }

     public function dispatch_action(){
         $addressbook = new Admin\Addressbook();
        add_action( 'admin_init', [$addressbook,'from_handler']  );
     }
 }