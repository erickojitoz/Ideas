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

<section class="home-title">
  <!-- Home Title -->
  <h1><?php echo get_option('ideas_main_title'); ?></h1>
  <!-- Home Subtilte -->
  <p><?php echo get_option('ideas_main_subtitle'); ?></p>
</section>

<div class="post-featured cf">
  <section class="span4 ft">
  	<div class="featured-image">
    <a href="<?php echo get_option('Ideas_featured_link_one'); ?>">
		<img src="<?php echo get_option('Ideas_featured_image_one'); ?>" alt="">
	</a>
    </div>
    <p><?php echo get_option('Ideas_featured_post_one');  ?></p>
  </section>
  <section class="span4 ft">
  	<div class="featured-image">
    <a href="<?php echo get_option('Ideas_featured_link_two'); ?>">
		<img src="<?php echo get_option('Ideas_featured_image_two'); ?>" alt="">
	</a>
    </div>
    <p><?php echo get_option('Ideas_featured_post_two');  ?></p>
  </section>
  <section class="span4 ft">
  	<div class="featured-image">
    <a href="<?php echo get_option('Ideas_featured_link_three'); ?>">
		<img src="<?php echo get_option('Ideas_featured_image_three'); ?>" alt="">
	</a>
    </div>
    <p><?php echo get_option('Ideas_featured_post_three');  ?></p>
  </section>
</div>

<?php get_footer() ?>
