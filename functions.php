<?php
/* admin footer */
function remove_footer_admin ()
{
	echo '<span id="footer-thankyou">Designed by <a href="http://opendevteam.com" target="_blank">Open Dev Team</a>  |  Contact us at: <a href="mailto:opendevinfo@gmail.com" target="_blank">opendevinfo@gmail.com</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

/* author contact */
function new_contactmethods( $contactmethods ) {
  $contactmethods['facebook'] = 'Facebook'; // Add Facebook
  $contactmethods['skype'] = 'Skype'; // Add Skype
  unset($contactmethods['yim']); // Remove Yahoo IM
  unset($contactmethods['aim']); // Remove AIM
  unset($contactmethods['jabber']); // Remove Jabber

return $contactmethods;
}

add_filter('user_contactmethods','new_contactmethods',10,1);

/* background */
$args = array(
	'default-color' => '000000',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg',
);
add_theme_support( 'custom-background', $args);

/* header */
$args = array(
	'flex-width'    => true,
	'width'         => 960,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/img/header.jpg',
);
add_theme_support( 'custom-header', $args );

/* images */
add_image_size(
	'post-img', 300, 220, true
);

/* menus */
register_nav_menus(array(
	'hmenu' => 'Header Menu',
	'fmenu' => 'Footer Menu',
	'smenu' => 'Sidebar Menu'
));

/* posts */
add_theme_support(
	'post-thumbnails'
);

require( get_template_directory().'/lib/ideas.php' );