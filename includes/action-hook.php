<?php

//As sample, we have added WPT plugins File
$WPT_Module =  WP_PLUGIN_DIR . '/woo-product-table/woo-product-table.php';
if( file_exists( $WPT_Module ) ){
   include_once $WPT_Module;
}
//As sample, we have added UltraTable plugins File
$UltraTAble_Module =  WP_PLUGIN_DIR . '/UltraTable/ultratable.php';
if( file_exists( $UltraTAble_Module ) ){
   include_once $UltraTAble_Module;
}




//Write your action here