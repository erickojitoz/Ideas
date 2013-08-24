<?php

function Ideas_configuracion(){
	wp_register_script('adminIdeas', get_template_directory_uri().'/lib/js/admin.js');
	wp_enqueue_script('adminIdeas');
	wp_register_style('adminIdeasSyle', get_template_directory_uri().'/lib/css/style.css');
	wp_enqueue_style('adminIdeasSyle');
	include(get_template_directory().'/lib/config-ideas.php');
}

function Ideas_add_menu(){
	if (function_exists('add_menu_page')) {
		add_theme_page("Theme Options", "Theme Options", 'edit_themes', basename(__FILE__), 'Ideas_configuracion');
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
	add_action('admin_menu', 'Ideas_add_menu');
	add_action('admin_print_scripts', 'upload_admin_scripts');
	add_action('admin_print_styles', 'upload_admin_styles');
}

function after_setup_ideas(){
	//update_option('ideas_analitycs', '');

	// update_option('Ideas_featured_post_one',$main_title_field);
	// update_option('Ideas_featured_link_one',$main_title_field);
	// update_option('Ideas_featured_image_one',$main_title_field);
	// update_option('Ideas_featured_post_two',$main_title_field);
	// update_option('Ideas_featured_link_two',$main_title_field);
	// update_option('Ideas_featured_image_two',$main_title_field);
	// update_option('Ideas_featured_post_three',$main_title_field);
	// update_option('Ideas_featured_link_three',$main_title_field);
	// update_option('Ideas_featured_image_three',$main_title_field);

	// update_option('Ideas_main_logo',$main_title_field);

	// update_option('Ideas_social_network_one',$main_title_field);
	// update_option('Ideas_social_network_one_choose',$main_title_field);
	// update_option('Ideas_social_network_two',$main_title_field);
	// update_option('Ideas_social_network_two_choose',$main_title_field);
	// update_option('Ideas_social_network_three',$main_title_field);
	// update_option('Ideas_social_network_three_choose',$main_title_field);
	// update_option('Ideas_social_network_four',$main_title_field);
	// update_option('Ideas_social_network_four_choose',$main_title_field);
	// update_option('Ideas_social_network_five',$main_title_field);
	// update_option('Ideas_social_network_five_choose',$main_title_field);


	update_option('ideas_slide','[{"image":"wp-content\/themes\/Ideas\/img\/slider\/slide1.jpg","description":"<h1>Welcome to Ideas Design<\/h1>\r\n\t    <p>Welcome to our website, let us help you to reach your personal goals and professional objectives.<\/p>\r\n    \t<p>We are a small business (making big projects) specialized in web design, graphic and publicity. We are not ALL about gaining your business, but ALL about helping you reach your goals.<\/p>\r\n\t    <a href=\"contact\/\"><div class=\"slide-button\">Get started now<\/div><\/a>"},{"image":"wp-content\/themes\/Ideas\/img\/slider\/slide2.jpg","description":"<h1>Welcome to Ideas Design<\/h1>\r\n\t    <p>Welcome to our website, let us help you to reach your personal goals and professional objectives.<\/p>\r\n    \t<p>We are a small business (making big projects) specialized in web design, graphic and publicity. We are not ALL about gaining your business, but ALL about helping you reach your goals.<\/p>\r\n\t    <a href=\"contact\/\"><div class=\"slide-button\">Get started now<\/div><\/a>"}]');

	update_option('ideas_main_title', 'OpenIdeas Theme');
	update_option('ideas_main_subtitle', '934 343 434');
}
add_action( 'after_switch_theme', 'after_setup_ideas' );

function update_links($links,$network,$mode){

  if($mode == "insert"){
	if($network == "skype"){
		$links = "skype:".$links."?call";
	}
    else if($network == "ownEmail"){
		$links = "mailto:".$links;
	}
  }
  else if($mode == "retrieve"){


	if($network == "skype"){
	   $links = str_replace("skype:","",$links);
	   $links = str_replace("?call","",$links);
	}
	else if($network == "ownEmail"){
		$links = str_replace("mailto:",$links);
	}
  }
	return $links;
}

function generateNetworkSelector($network){

	$Ideas_select_field_array = array("","facebook","twitter","soundcloud","googleplus","skype","linkedin","ownEmail","youtube","pinterest","instagram","github");
	$Ideas_select_field_show_array = array("","Facebook","Twitter","Sound Cloud","Google Plus","Skype","Linkedin","Email","Youtube","Pinterest","Instagram","Github");
	$ideas_show = "";
	for( $i = 0; $i < count($Ideas_select_field_array); $i++ ){

			if( $Ideas_select_field_array[$i] == $network ){
				$ideas_show .= "<option value='$Ideas_select_field_array[$i]' selected>$Ideas_select_field_show_array[$i]</option>";
			}
			else{
				$ideas_show .= "<option value='$Ideas_select_field_array[$i]'>$Ideas_select_field_show_array[$i]</option>";
			}
	}
	return $ideas_show;
}