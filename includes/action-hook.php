<?php

$plugins_for_actions = array(
    'woo-product-table/woo-product-table.php',
    'UltraTable/ultratable.php',
);
foreach( $plugins_for_actions as $plugin_loc ){
    $UTA_Module =  WP_PLUGIN_DIR . '/' . $plugin_loc;
    if( is_plugin_active( $plugin_loc ) && file_exists( $UTA_Module ) ){
       include_once $UTA_Module;
    }
}

//add_action( 'your_action_hook_name', 'test_saiful' );
//Write your action here