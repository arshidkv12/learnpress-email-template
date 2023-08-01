<?php
/**
 * Plugin Name: Learnpress Email
 */


add_filter('learn_press_get_template', 'lpe_learnpress_get_template', 10, 5);
function lpe_learnpress_get_template(
    $located, 
    $template_name, 
    $args, 
    $template_path, 
    $default_path
){
   
    if( $template_name == 'emails/email-header.php' ){
        $located = plugin_dir_path( __FILE__ ).'/email-header.php';
    }
    if( $template_name == 'emails/email-footer.php' ){
        $located = plugin_dir_path( __FILE__ ).'/email-footer.php';
    }

    return $located;
}
