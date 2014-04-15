<?php 

function cpotheme_metadata_pagelist_optional(){
	$cpotheme_data = array();	
	$page_list = get_pages('sort_column=post_parent,menu_order');    
	$cpotheme_data[0] = __('(Select a Page...)', 'cpotheme');
	foreach ($page_list as $current_page)
		$cpotheme_data[$current_page->ID] = $current_page->post_title;
	return $cpotheme_data;
}

function cpotheme_metadata_slideposition(){
	$cpotheme_data = array(
	'left' => 'To The Left',
	'right' => 'To The Right');
	return $cpotheme_data;
}

function cpotheme_metadata_slidecaption(){
	$cpotheme_data = array(
	'dark' => 'Dark Text',
	'light' => 'Light Text');
	return $cpotheme_data;
}

function cpotheme_metadata_bgtexture(){
	$cpotheme_data = array(
	'' => get_template_directory_uri().'/images/admin/texture_none.gif',
	'dots' => get_template_directory_uri().'/images/admin/texture_dots.gif',
	'diagonal' => get_template_directory_uri().'/images/admin/texture_diagonal.gif',
	'stripes' => get_template_directory_uri().'/images/admin/texture_stripes.gif',
	'diamonds' => get_template_directory_uri().'/images/admin/texture_diamonds.gif',
	'bubbles' => get_template_directory_uri().'/images/admin/texture_bubbles.gif',
	'grid' => get_template_directory_uri().'/images/admin/texture_grid.gif',
	'checkerboard' => get_template_directory_uri().'/images/admin/texture_checkerboard.gif',
	'metal' => get_template_directory_uri().'/images/admin/texture_metal.gif',
	'seeds' => get_template_directory_uri().'/images/admin/texture_seeds.gif',
	'bricks' => get_template_directory_uri().'/images/admin/texture_bricks.gif',
	'pixels' => get_template_directory_uri().'/images/admin/texture_pixels.gif',
	'points' => get_template_directory_uri().'/images/admin/texture_points.gif',
	'floor' => get_template_directory_uri().'/images/admin/texture_floor.gif',
	'stone' => get_template_directory_uri().'/images/admin/texture_stone.gif');
	
	return $cpotheme_data;
}