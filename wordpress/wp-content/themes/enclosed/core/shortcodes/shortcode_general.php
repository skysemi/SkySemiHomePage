<?php

add_action('admin_enqueue_scripts', 'cpotheme_shortcode_tinymce_vars');
function cpotheme_shortcode_tinymce_vars($plugin_array) {  
	$core_path = get_template_directory_uri().'/core/';
	if(defined('WP_CPODEV')) $core_path = get_template_directory_uri().'/../cpoframework/core/';
	wp_localize_script('script_general_admin', 'cpotheme_shortcodes_vars', array('toolbar_icon' => $core_path.'/images/icon_shortcodes.png'));
}
	
add_filter('mce_external_plugins', 'cpotheme_shortcode_tinymce');  
function cpotheme_shortcode_tinymce($plugin_array) {  
	$core_path = get_template_directory_uri().'/core/';
	if(defined('WP_CPODEV')) $core_path = get_template_directory_uri().'/../cpoframework/core/';
	
	$plugin_array['cpotheme_shortcodes'] = $core_path.'scripts/shortcodes-tinymce.js';
	return $plugin_array; 
}

add_filter('mce_buttons', 'cpotheme_shortcode_tinymce_buttons'); 
function cpotheme_shortcode_tinymce_buttons($button_list){
   array_push($button_list, "cpotheme_shortcodes_button");
   return $button_list; 
} 	
