<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Open Dev
 * @subpackage Ideas
 * @since Ideas 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<head>
  <meta charset='utf-8'>
  <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="viewport" content="width = device-width; initial-scale = 1.0; maximum-scale = 1.0; user-scalable = no">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/icon.ico">
 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" media="screen">
  <link href='http://fonts.googleapis.com/css?family=Poiret+One|Roboto:300' rel='stylesheet' type='text/css'>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/events.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-28061144-13', 'ideaspublcity.com');
    ga('send', 'pageview');

  </script>
  <script type="text/javascript">
    $(function () {
      $(".rslides").responsiveSlides({
        speed: 1000,
        timeout: 8000,
      });
    });
  </script>
  <?php wp_head() ?>
</head>

<body class='custom-background'>
<!--[if lt IE 8]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<header class="cf">
  <section id="logo">
    <a href="<?php bloginfo('url') ?>">
      <img src="<?php bloginfo('template_directory') ?>/img/logo.png">
    </a>
  </section>
  <section id="top-icons">
    <div>
      <a href="<?php  echo get_option("Ideas_social_network_one"); ?>" target="_blank">
        <img class="header-icon" src="<?php bloginfo('template_directory') ?>/img/<?php echo get_option("Ideas_social_network_one_choose"); ?>.png">
      </a>
    </div>
    <div>
      <a href="<?php echo get_option("Ideas_social_network_two");  ?>" target="_blank" >
        <img class="header-icon" src="<?php bloginfo('template_directory') ?>/img/<?php echo get_option("Ideas_social_network_two_choose"); ?>.png">
      </a>
    </div>
    <div>
      <a href="<?php echo get_option("Ideas_social_network_three"); ?>" target="_blank" >
        <img class="header-icon" src="<?php bloginfo('template_directory') ?>/img/<?php echo get_option("Ideas_social_network_three_choose");  ?>.png">
      </a>
    </div>
    <div>
      <a href="<?php echo get_option("Ideas_social_network_four"); ?>">
        <img class="header-icon" src="<?php bloginfo('template_directory') ?>/img/<?php echo get_option("Ideas_social_network_four_choose"); ?>.png">
      </a>
    </div>
    <div>
      <a href="<?php echo get_option("Ideas_social_network_five"); ?>">
        <img class="header-icon" src="<?php bloginfo('template_directory') ?>/img/<?php echo get_option("Ideas_social_network_five"); ?>.png">
      </a>
    </div>
  </section>
    <?php if(get_option('ideas_searchform') == 'on'): ?>
    <?php get_search_form(); ?>
    <?php endif; ?>
</header>

<section class="cf">
  <div class="menu-button">Menu</div>
  <?php wp_nav_menu(array(
    'theme_location'  => 'hmenu',
    'menu'            => 'hmenu',
    'container'       => 'nav',
    'container_class' => 'menu',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => 'menu',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="nav" role="navigation" class="hmenu cf">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
  )) ?>
  <script>
    $("[role='navigation']").flexNav();
  </script>
</section>

<!-- header ends -->