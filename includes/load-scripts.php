<?php

if( !function_exists( 'ultraaddons_addons_enqueue_scripts' ) ){
    function ultraaddons_addons_enqueue_scripts(){
        wp_enqueue_style( 'ultraaddons-addons-style', ULTRAADDONS_ADDONS_BASE_URL . 'assets/css/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'ultraaddons-addons-script', ULTRAADDONS_ADDONS_BASE_URL . 'assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );

        $ajax_url = admin_url( 'admin-ajax.php' );
        $ULTRAADDONS_ADDONS_DATA = array( 
            'ajaxurl'   => $ajax_url,
            'ajax_url'  => $ajax_url,
            'site_url'  => site_url(),
            'checkout_url' => wc_get_checkout_url(),
            'cart_url' => wc_get_cart_url(),
            );
        wp_localize_script( 'ultraaddons-addons-script', 'ULTRAADDONS_ADDONS_DATA', $ULTRAADDONS_ADDONS_DATA );
    }
}
add_action( 'wp_enqueue_scripts', 'ultraaddons_addons_enqueue_scripts' );

if( !function_exists( 'ultraaddons_addons_admin_enqueue_scripts' ) ){
    function ultraaddons_addons_admin_enqueue_scripts( ) {
        wp_enqueue_style( 'ultraaddons-addons-css', ULTRAADDONS_ADDONS_BASE_URL . 'assets/css/admin-common.css', array(), '1.0.0', 'all' );
        wp_enqueue_style('ultraaddons-addons-css');

        wp_enqueue_style( 'ultraaddons-addons-admin', ULTRAADDONS_ADDONS_BASE_URL . 'assets/css/admin-style.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'ultraaddons-addons-admin', ULTRAADDONS_ADDONS_BASE_URL . 'assets/js/admin-script.js', array( 'jquery' ), '1.0.0', true );
    }
}
add_action( 'admin_enqueue_scripts', 'ultraaddons_addons_admin_enqueue_scripts' );