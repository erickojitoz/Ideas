<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Open Dev
 * @subpackage Ideas
 * @since Ideas 1.0
 */
get_header() ?>

<div class="cf">
<section id="slide" >
  <?php

  if(get_option('ideas_slide')){
    $slideJson = json_decode(get_option('ideas_slide'),true);
  ?>
  <ul class="rslides">
    <?php foreach ($slideJson as $value) { ?>
  	<li>
  	  <img src="<?php echo $value['image'] ?>">
  	  <div class="slide-text">
  	    <?php echo $value['description'] ?>
  	  </div>
  	</li>
    <?php } ?>
  </ul>
  <?php } ?>
</section>

<section class="phone">
  <!-- Home Title -->
  <h1><?php echo get_option('ideas_main_title'); ?></h1>
  <p><?php echo get_option('ideas_main_subtitle'); ?></p>
  <!-- Home Subtilte -->
</section>

<div class="services cf">
  <h1>We are specialized in:</h1>
  <section class="span4 serv">
  	<div class="service-icon">
    <a href="<?php bloginfo('url') ?>/services/web-design/"><img src="<?php bloginfo( 'template_directory' ) ?>/img/earth.png" alt=""></a>
    </div>
    <p>Web Design</p>
  </section>
  <section class="span4 serv">
  	<div class="service-icon">
    <a href="<?php bloginfo('url') ?>/services/graphic-design/"><img src="<?php bloginfo( 'template_directory' ) ?>/img/images.png" alt=""></a>
    </div>
    <p>Graphic Deisgn</p>
  </section>
  <section class="span4 serv">
  	<div class="service-icon">
    <a href="<?php bloginfo('url') ?>/services/publicity/"><img src="<?php bloginfo( 'template_directory' ) ?>/img/user.png" alt=""></a>
    </div>
    <p>Publicity</p>
  </section>
</div>

<section class="featured">
  <h1>Why Us?</h1>
  <h4>There are so many designers around Texas, but we have many things that they don't.</h4>
  <div class="home-image"><img src="<?php bloginfo('template_directory') ?>/img/web.png"></div>
  <div class="home-text border-left">
  	<h2>We use the latest technology</h2>
  	<p>Although we are a small company, we always focus on learning the latest techniques and know inoveras technologies that are changing the course of design and advertising. We offer more innovative ideas for your project and help you achieve the success you seek.</p>
  </div>
</section>

<section class="featured">
  <h1>Our pricing!</h1>
  <div class="home-text border-right">
  	<h2>The lowest prices in Texas</h2>
  	<p>We are a company that knows the current economic situation, for that reason we offer the best prices. With us you always get more, so who charge the same as us, they always give you less. No one can compete with our prices.</p>
  </div>
  <div class="home-image"><img src="<?php bloginfo('template_directory') ?>/img/happy.png"></div>
</section>

<section class="featured">
  <h1>Get Started now</h1>
  <h4>Contact us for a free stimation of your project. Discover all that you can get and become part of our happy costumers!</h4>
  <section class="free-button"><a href="<?php bloginfo('url') ?>/contact/"><p class="slide-button">Free Estimate</p></a></section>
</section>
</div>

<?php get_footer() ?>