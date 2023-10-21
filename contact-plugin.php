<?php

/**
 * Plugin Name: Contact Plugin
 * Description: this is contact plugin
 * version: 1.00
 * Text Domain: options-plugin
 */

 if(!defined('ABSPATH'))
 {
    die("you can not be anywhere");
 }
if(!class_exists('ContactPlugin')){
 class ContactPlugin
 {
    public function __construct()
    {
        define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));
        require_once(MY_PLUGIN_PATH.'/vendor/autoload.php');
    }
    public function initialize()
    {
        include_once MY_PLUGIN_PATH.'includes/utilities.php';
        include_once MY_PLUGIN_PATH.'includes/options-page.php';
        include_once MY_PLUGIN_PATH.'includes/contact-form.php';
    }

 }

$ContactPlugin= new ContactPlugin;
$ContactPlugin->initialize();
}