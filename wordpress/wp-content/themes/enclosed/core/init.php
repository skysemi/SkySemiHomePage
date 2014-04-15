<?php
//Theme options setup
add_action('after_setup_theme', 'cpotheme_setup');
function cpotheme_setup(){
	//Set core variables
	cpotheme_update_option('cpo_core_version', '1.8.1');
	
	//Initialize supported theme features
	add_editor_style();
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_post_type_support('page', 'excerpt');
	
	//Remove WordPress version number for security purposes
	remove_action('wp_head', 'wp_generator');
	
	//Load translation text domain and make translation available
	$languages_path = get_template_directory().'/core/languages';
	if(defined('WP_CPODEV')) 
		$languages_path = get_template_directory().'/../cpoframework/core/languages';
	load_theme_textdomain('cpocore', $languages_path);
	load_theme_textdomain('cpotheme', get_template_directory().'/languages');
	$locale = get_locale();
	$locale_file = get_template_directory()."/languages/$locale.php";
	if(is_readable($locale_file)) require_once($locale_file);
}


//Add Public scripts
add_action('wp_enqueue_scripts', 'cpotheme_scripts_front');
function cpotheme_scripts_front( ){
    $scripts_theme_path = get_template_directory_uri().'/scripts/';
	$scripts_path = get_template_directory_uri().'/core/scripts/';
	if(defined('WP_CPODEV')) $scripts_path = get_template_directory_uri().'/../cpoframework/core/scripts/';

	//Enqueue necessary scripts already in the WordPress core
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-effects-core');
	wp_enqueue_script('jquery-effects-fade');
	wp_enqueue_script('thickbox');
	if(is_singular() && get_option('thread_comments')) 
		wp_enqueue_script('comment-reply');
    
	//Add HTML5 Shiv for Internet Explorer 8
	if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8') !== false)
		wp_enqueue_script('cpotheme_html5', $scripts_path.'html5.js');
	//Register custom scripts for later enqueuing
	wp_register_script('cpotheme_skrollr', $scripts_path.'skrollr.js', array(), false, true);
	wp_register_script('cpotheme_waypoints', $scripts_path.'jquery-waypoints.js', array(), false, true);
	wp_register_script('cpotheme_waypoints_sticky', $scripts_path.'jquery-waypoints-sticky.js', array('cpotheme_waypoints'), false, true);
	wp_enqueue_script('cpotheme_jquery_cycle', $scripts_path.'jquery-cycle.js', array(), false, true);
	wp_enqueue_script('cpotheme_jquery_prettyphoto', $scripts_path.'jquery-prettyphoto.js', array(), false, true);
	wp_register_script('cpotheme_shortcodes_toggles', $scripts_path.'shortcodes-toggles.js', array('jquery-ui-accordion', 'jquery-ui-tabs'));
	//Add custom scripts
	wp_enqueue_script('cpotheme_core', $scripts_path.'core.js', array(), false, true);
	wp_enqueue_script('cpotheme_general', $scripts_theme_path.'general.js', array(), false, true);
}

//Add Admin scripts
add_action('admin_enqueue_scripts', 'cpotheme_scripts_back');
function cpotheme_scripts_back( ){
    $scripts_theme_path = get_template_directory_uri().'/scripts/';
	$scripts_path = get_template_directory_uri().'/core/scripts/';
	if(defined('WP_CPODEV')) $scripts_path = get_template_directory_uri().'/../cpoframework/core/scripts/';

	//Common scripts
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-effects-core');
	wp_enqueue_script('jquery-effects-fade');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('media-upload');        
	wp_enqueue_script('script_colorpicker', $scripts_path.'colorpicker/colorpicker.js');
	wp_enqueue_script('script_general_admin', $scripts_path.'admin.js');
}


//Add public stylesheets
add_action('wp_enqueue_scripts', 'cpotheme_add_styles');
function cpotheme_add_styles(){
	$stylesheets_path = get_template_directory_uri().'/core/css/';
	if(defined('WP_CPODEV')) $stylesheets_path = get_template_directory_uri().'/../cpoframework/core/css/';
	
    //Common styles
    wp_enqueue_style('thickbox');     
	wp_enqueue_style('cpotheme-shortcodes', $stylesheets_path.'base.css');
	wp_enqueue_style('cpotheme-colorpicker', $stylesheets_path.'prettyphoto.css');
	wp_enqueue_style('cpotheme-fontawesome', $stylesheets_path.'fontawesome.css');
	wp_enqueue_style('cpotheme-main', get_bloginfo('stylesheet_url'));
	//Responsive Stylesheet (if it exists)
	$responsive_styles = get_template_directory_uri().'/style-responsive.css';
	if(cpotheme_get_option('layout_responsive') != 0)
		wp_enqueue_style('cpotheme-responsive', $responsive_styles);
}


//Add admin stylesheets
add_action('admin_print_styles', 'cpotheme_add_admin_styles');
function cpotheme_add_admin_styles(){
	$stylesheets_path = get_template_directory_uri().'/core/css/';
	if(defined('WP_CPODEV')) $stylesheets_path = get_template_directory_uri().'/../cpoframework/core/css/';
	
    wp_enqueue_style('style_admin', $stylesheets_path.'admin.css');
    wp_enqueue_style('style_colorpicker', $stylesheets_path.'colorpicker.css');
	wp_enqueue_style('style_fontawesome', $stylesheets_path.'fontawesome.css');
    wp_enqueue_style('thickbox');    
}


//Add all Core components
$core_path = get_template_directory().'/core/';
if(defined('WP_CPODEV'))
	$core_path = get_template_directory().'/../cpoframework/core/';

	
//Main Components
require_once($core_path.'general.php');
require_once($core_path.'filters.php');
require_once($core_path.'meta.php');
require_once($core_path.'custom.php');
require_once($core_path.'forms.php');
require_once($core_path.'seo.php');
require_once($core_path.'settings.php');
require_once($core_path.'branding.php');
//Classes
require_once($core_path.'classes/class_menu.php');
//Metadata
require_once($core_path.'metadata/metadata_general.php');
//Widgets
require_once($core_path.'widgets/widget_recentposts.php');
require_once($core_path.'widgets/widget_tweets.php');
require_once($core_path.'widgets/widget_flickr.php');
//require_once($core_path.'widgets/widget_subscribers.php');
require_once($core_path.'widgets/widget_advert.php');
//Shortcodes
require_once($core_path.'shortcodes/shortcode_elements.php');
require_once($core_path.'shortcodes/shortcode_layout.php');
require_once($core_path.'shortcodes/shortcode_content.php');
require_once($core_path.'shortcodes/shortcode_social.php');
require_once($core_path.'shortcodes/shortcode_toggles.php');
require_once($core_path.'shortcodes/shortcode_general.php');