<?php 

namespace Zoy\WpAcademy\Admin;


/**
 * add
 */

 class Addressbook {
     
    public function plugin_page(){
        $action = isset($_GET['action'])? $_GET['action']: 'list';

        switch($action){
            case 'new' :
                $template = __DIR__ .'/views/address-new.php';
                break;
            case 'edit' :
                 $template = __DIR__ .'/views/address-edit.php';
                break;

            case 'view' :
                $template = __DIR__ .'/views/address-view.php';
                break;
            default:
                $template = __DIR__ .'/views/address-list.php';
                break;
        }

        if(file_exists($template)){
            include $template;
        }
    }
/**
 * From handler 
 */
    public function from_handler(){
        if(!isset($_POST['submit_address'])){
            return;
        }

        if(!wp_verify_nonce($_POST['_wpnonce'],'new-address')){
            wp_die('Are you cheating');
        }
        if(!current_user_can('manage_options')){
            wp_die('Are you cheating');
        }

        var_dump($_POST);
        exit;
    }
 }