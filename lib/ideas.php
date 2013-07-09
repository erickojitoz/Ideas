<?php

function Ideas_configuracion(){
	include(get_template_directory().'/lib/config-ideas.php');
}

function title_pane(){
	include(get_template_directory().'/lib/title_pane.php');
}

function redes_pane(){
     include(get_template_directory().'/lib/social_network_pane.php');
}

function slide_pane(){
	include(get_template_directory().'/lib/slide_pane.php');
}


function Ideas_add_menu(){
	if (function_exists('add_menu_page')) {
		add_menu_page('Ideas', 'Ideas', 3, 'ideas/ideas.php','Ideas_configuracion'); //, get_template_directory_uri().'/img/logo.png');

		add_submenu_page('ideas/ideas.php', "Ideas", "Slide", 3, 'Slide_panel', 'slide_pane');
		add_submenu_page('ideas/ideas.php', "Ideas", 'Redes Sociales', 3, 'Redes_panel', 'redes_pane');
		add_submenu_page('ideas/ideas.php', "Ideas", 'Title', 3, 'Title_panel', 'title_pane');

	}
}

function upload_admin_scripts()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_template_directory_uri().'/js/upload-admin.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}

function upload_admin_styles()
{
	wp_enqueue_style('thickbox');
}

if (function_exists('add_action')) {
	add_action('admin_menu', 'Ideas_add_menu');
	add_action('admin_print_scripts', 'upload_admin_scripts');
	add_action('admin_print_styles', 'upload_admin_styles');
}