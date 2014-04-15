<?php 
add_action('after_setup_theme', 'cpotheme_init');
if(!function_exists('cpotheme_init')):
function cpotheme_init(){
	add_image_size('portfolio', 600, 350, true);
	add_theme_support('custom-background', array('default-color' => '221111'));
} endif;

// Registers all widget areas
add_action('widgets_init', 'cpotheme_sidebar_init');
function cpotheme_sidebar_init(){
	
    register_sidebar(array('name' => __('Default Sidebar', 'cpotheme'),
    'id' => 'default-widgets',
    'description' => __('Sidebar shown in all standard pages.', 'cpotheme'),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'));

    register_sidebar(array('name' => __('Footer Sidebar 1', 'cpotheme'),
    'id' => 'footer-widgets-1',
    'description' => __('Shown in the footer area.', 'cpotheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'));

    register_sidebar(array('name' => __('Footer Sidebar 2', 'cpotheme'),
    'id' => 'footer-widgets-2',
    'description' => __('Shown in the footer area.', 'cpotheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'));

    register_sidebar(array('name' => __('Footer Sidebar 3', 'cpotheme'),
    'id' => 'footer-widgets-3',
    'description' => __('Shown in the footer area.', 'cpotheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'));
	
	register_sidebar(array('name' => __('Footer Sidebar 4', 'cpotheme'),
    'id' => 'footer-widgets-4',
    'description' => __('Shown in the footer area.', 'cpotheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'));
}

//Registers all menu areas
add_action('widgets_init', 'cpotheme_menu_init');
function cpotheme_menu_init(){
    register_nav_menus(array('top_menu' => __('Top Menu', 'cpotheme')));
    register_nav_menus(array('main_menu' => __('Main Menu', 'cpotheme')));
    register_nav_menus(array('footer_menu' => __('Footer Menu', 'cpotheme')));
}

add_action('admin_notices', 'cpotheme_notice_upgrade');
function cpotheme_notice_upgrade(){
	echo '<div id="message" class="updated">';
	echo '<a style="display:block;" target="_blank" href="http://www.cpothemes.com/themes/">';
	echo '<p style="font-size:18px;"><strong>Upgrade to Our Premium Themes for kickass features</strong></p>';
	echo '<p>With our premium themes you can have a full Theme Options page, way more templates, control over typography and layout of your site, a responsive layout, and premium support!</p>';
	echo '</a>';
	echo '</div>';
} 