<?php

function Ideas_configuracion(){
	include(get_template_directory().'/lib/config-ideas.php');
}

function slide_pane(){
	include(get_template_directory().'/lib/slide_pane.php');
}

function featured_post_pane(){
	include(get_template_directory().'/lib/featured_post_pane.php');
}

function redes_pane(){
     include(get_template_directory().'/lib/social_network_pane.php');
}

function main_logo_pane(){
	include(get_template_directory().'/lib/main_logo_pane.php');
}

function title_pane(){
	include(get_template_directory().'/lib/title_pane.php');
}

function ideas_add_menu(){
	if (function_exists('add_menu_page')) {
		add_menu_page('Ideas', 'Open Dev', 3, 'ideas/ideas.php','Ideas_configuracion'); //, get_template_directory_uri().'/img/logo.png');

		add_submenu_page('ideas/ideas.php', "Ideas", "Slideshow", 3, 'Slide_panel', 'slide_pane');
		add_submenu_page('ideas/ideas.php', "Ideas", 'Featured Posts', 3, 'featured_post_panel', 'featured_post_pane');
		add_submenu_page('ideas/ideas.php', "Ideas", 'Social Networks', 3, 'Redes_panel', 'redes_pane');
	}
}

function upload_admin_scripts()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_template_directory_uri().'/js/upload-admin.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
	wp_register_script('my-upload2', get_template_directory_uri().'/js/events.js');
	wp_enqueue_script('my-upload2');

}

function upload_admin_styles()
{
	wp_enqueue_style('thickbox');
}

if (function_exists('add_action')) {
	add_action('admin_menu', 'ideas_add_menu');
	add_action('admin_print_scripts', 'upload_admin_scripts');
	add_action('admin_print_styles', 'upload_admin_styles');
}