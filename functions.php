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
	'default-color' => 'f2f3f4',
);
add_theme_support( 'custom-background', $args);

/* header */
$args = array(
	// Text color and image (empty to use none).
	'default-text-color'     => '444',

	// Set height and width, with a maximum value for the width.
	'height'                 => 200,
	'width'                  => 960,
	'max-width'              => 2000,

	// Support flexible height and width.
	'flex-height'            => true,
	'flex-width'             => true,

	// Random image rotation off by default.
	'random-default'         => false,
);
add_theme_support( 'custom-header', $args );

/* images */
add_image_size(
	'post-img', 300, 220, true
);
add_image_size(
	'featured-img', 220, 220, true
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