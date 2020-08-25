<?php

/**
 * Plugin Name: Addons Plugin for UltraAddons
 * Plugin URI: #
 * Description: A addons plugin for Woo Product Table, UltraTable, UltraAddons all addons/polugin. It's not a update able plugin. It's only for our Plugin Customization.
 * Author: Saiful Islam
 * Author URI: https://profiles.wordpress.org/codersaiful/#content-plugins
 * 
 * Version: 1.0.0
 * Requires at least:    4.0.0
 * Tested up to:         5.4.2
 * WC requires at least: 3.7
 * WC tested up to:      4.4.1
 */


if ( !defined( 'ABSPATH' ) ) {
    die();
}

if ( !defined( 'ULTRAADDONS_ADDONS_VERSION' ) ) {
    define( 'ULTRAADDONS_ADDONS_VERSION', '1.0.0');
}
if( !defined( 'ULTRAADDONS_ADDONS_CAPABILITY' ) ){
    $ultraaddons_addons_capability = apply_filters( 'ultraaddons_addons_menu_capability', 'manage_woocommerce' );
    define( 'ULTRAADDONS_ADDONS_CAPABILITY', $ultraaddons_addons_capability );
}

if ( !defined( 'ULTRAADDONS_ADDONS_NAME' ) ) {
    define( 'ULTRAADDONS_ADDONS_NAME', 'UltraAddons - Addons Plugin');
}

if ( !defined( 'ULTRAADDONS_ADDONS_BASE_NAME' ) ) {
    define( 'ULTRAADDONS_ADDONS_BASE_NAME', plugin_basename( __FILE__ ) );
}

if ( !defined( 'ULTRAADDONS_ADDONS_MENU_SLUG' ) ) {
    define( 'ULTRAADDONS_ADDONS_MENU_SLUG', 'UltraAddons-addons' );
}
if( !defined( 'ULTRAADDONS_ADDONS_PLUGIN' ) ){
    define( 'ULTRAADDONS_ADDONS_PLUGIN', 'UltraAddons-addons/init.php' );
}


if ( !defined( 'ULTRAADDONS_ADDONS_BASE_URL' ) ) {
    define( "ULTRAADDONS_ADDONS_BASE_URL", plugins_url() . '/'. plugin_basename( dirname( __FILE__ ) ) . '/' );
}

if ( !defined( 'ULTRAADDONS_ADDONS_BASE_DIR' ) ) {
    define( "ULTRAADDONS_ADDONS_BASE_DIR", str_replace( '\\', '/', dirname( __FILE__ ) ) );
}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );


//Including File
include_once ULTRAADDONS_ADDONS_BASE_DIR . '/includes/load-scripts.php';
include_once ULTRAADDONS_ADDONS_BASE_DIR . '/includes/action-hook.php';
include_once ULTRAADDONS_ADDONS_BASE_DIR . '/includes/functions.php';

