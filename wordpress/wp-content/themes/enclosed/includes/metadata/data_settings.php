<?php // Options declaration
// Declares all config data to be used in the theme settings page.
function cpotheme_metadata_settings(){
	$cpotheme_config = array();

	//General Config
	$cpotheme_config[] = array(
	'id' => 'general_config',
	'name' => __('General Options', 'cpotheme'),
	'desc' => __('Global configuration options applied to the entire site.', 'cpotheme'),
	'type' => 'separator');

	$cpotheme_config[] = array(
	'id' => 'general_logo',
	'name' => __('Custom Logo', 'cpotheme'),
	'desc' => __('Insert the URL of an image to be used as a custom logo.', 'cpotheme'),
	'type' => 'upload');

	$cpotheme_config[] = array(
	'id' => 'general_texttitle',
	'name' => __('Enable Text Title?', 'cpotheme'),
	'desc' => __('Activate this to display the site title as text.', 'cpotheme'),
	'type' => 'yesno',
	'std' => '0');
	
	$cpotheme_config[] = array(
	'id' => 'general_analytics',
	'name' => __('Analytics Tracking Code', 'cpotheme'),
	'desc' => __('Insert here your analytics tool\'s tracking code.', 'cpotheme'),
	'type' => 'textarea');
	
	//Custom CSS, Javascript
	if(function_exists('cpotheme_metadata_customization'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_customization());

	
	//Layout
	$cpotheme_config[] = array(
	'id' => 'layout_config',
	'name' => __('Layout', 'cpotheme'),
	'desc' => __('Specify how you want the structure of the site to look.', 'cpotheme'),
	'type' => 'separator');
	
	//Slider
	$cpotheme_config[] = array(
	'id' => 'slider',
	'name' => __('Slider', 'cpotheme'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'slider_always',
	'name' => __('Always Display Slider?', 'cpotheme'),
	'desc' => __('If enabled, the homepage slider will be displayed in all pages.', 'cpotheme'),
	'type' => 'yesno',
	'std' => '0');

	//Styling
	$cpotheme_config[] = array(
	'id' => 'styling_config',
	'name' => __('Styling', 'cpotheme'),
	'desc' => __('Set up the look & feel of the site.', 'cpotheme'),
	'type' => 'separator');
	
	$cpotheme_config[] = array(
	'id' => 'home_portfolio',
	'name' => __('Home Portfolio Description', 'cpotheme'),
	'desc' => __('Allows you to insert custom text in the portfolio description that appears on the homepage. You can use HTML in here, as well as shortcodes.', 'cpotheme'),
	'type' => 'textarea');
	
	$cpotheme_config[] = array(
	'id' => 'bg_texture',
	'name' => __('Background Texture', 'cpotheme'),
	'desc' => __('Specifies how the sidebar is arranged throughout the whole site.', 'cpotheme'),
	'std'  => '',
	'type' => 'imagelist',
	'option' => cpotheme_metadata_bgtexture());
	
	
	//Contact Config
	$cpotheme_config[] = array(
	'id' => 'contact_config',
	'name' => __('Social & Contact', 'cpotheme'),
	'desc' => __('Setup for social media and contact information used in forms.', 'cpotheme'),
	'type' => 'separator');
	
	$cpotheme_config[] = array(
	'id' => 'contact_email',
	'name' => __('Contact Form Email', 'cpotheme'),
	'desc' => __('Entries in the contact form template will be sent to this email address.', 'cpotheme'),
	'type' => 'text');

	return $cpotheme_config;
}