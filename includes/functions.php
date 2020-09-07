<?php

/**
 * Here is a Sample Function with Action Hook
 * If you want to add anyone, Please copy and paste and change function name
 * And Use
 */
if( !function_exists( 'ultraaddons_addons_sample_function' ) ){
   function ultraaddons_addons_sample_function() {
 
   }
}
add_filter( 'filter_hook_name', 'ultraaddons_addons_sample_function' );

/**
 * Start Writing your script for action or Filter.
 * Normally write Filter here, for action, an another file name action-hook.php file is available to this same directory
 * 
 */


//wpto_default_column_arr
if( !function_exists( 'new_shortcode_column' ) ){
   function new_shortcode_column( $column_array ) {
       $column_array['new_shortcode'] = 'New Shortcode';
       return $column_array;
   }
}
add_filter( 'wpto_default_column_arr', 'new_shortcode_column' );

//Filter wpto_template_loc_item
if( !function_exists( 'temp_file_for_new_shortcode' ) ){
    function temp_file_for_new_shortcode( $file ){
        $file = __DIR__ . '/../file/hello.php';
        return $file;
    }
}
add_filter( 'wpto_template_loc_item_new_shortcode', 'temp_file_for_new_shortcode', 10 );

function input_for_new_shortcode($column_settings){
    //var_dump($column_settings['new_shortcode']);
    $text = isset( $column_settings['new_shortcode']['text'] ) ? $column_settings['new_shortcode']['text'] : false;
    ?>
<input class="ua_input" name="column_settings[new_shortcode][text]" value="<?php echo esc_attr( $text ); ?>">
<?php 
}
add_action( 'wpto_column_setting_form_new_shortcode', 'input_for_new_shortcode' );