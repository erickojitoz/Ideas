<?php

function Ideas_configuracion(){
	include(get_template_directory().'/lib/config-ideas.php');
}

function Title_pane(){

}

function Redes_pane(){

}

function Slide_pane(){

}

//Esto lo dejo comentado por si necesitamos añadir js a las págians de administración
// function my_plugin_admin_scripts() {
// 	wp_register_script( 'my-plugin-script', plugins_url('/js/dtree.js', __FILE__) );
// 	wp_enqueue_script( 'my-plugin-script' );
// }

function Ideas_add_menu(){
	if (function_exists('add_menu_page')) {
		add_menu_page('Ideas', 'Ideas', 3, 'ideas/ideas.php','Ideas_configuracion'); //, get_template_directory_uri().'/img/logo.png');

		add_submenu_page('ideas/ideas.php', "Ideas", "Slide", 3, 'Slide_panel', 'Slide_pane');
		add_submenu_page('ideas/ideas.php', "Ideas", 'Redes Sociales', 3, 'Redes_panel', 'Redes_pane');
		add_submenu_page('ideas/ideas.php', "Ideas", 'Title', 3, 'Title_panel', 'Title_pane');




		//Esto lo dejo comentado por si necesitamos añadir js a las págians de administración
		// $documentacion = add_submenu_page(dirname (__FILE__), "Ideas", "Slide", 3, dirname (__FILE__), 'Slide');
		// add_action('admin_print_scripts-' . $documentacion, 'my_plugin_admin_scripts');

	}
}

if (function_exists('add_action')) {
	add_action('admin_menu', 'Ideas_add_menu');
}