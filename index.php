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
  <h2>Featured Stories</h2>
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

<div id="portfolio" class="cf">
  <h2>Latest Posts</h2>
  <?php if (have_posts()) : while (have_posts()) : the_post(); $category = get_the_category(); ?>
    <article class="post span4">
      <div class="post-img">
        <?php if ( has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <?php the_post_thumbnail('post-img'); ?>
          </a>
        <?php else: ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <img src="<?php bloginfo('template_directory') ?>/img/default-image.jpg" alt="no-image">
          </a>
        <?php endif; ?>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="post-title">
          <h1><?php the_title() ?></h1>
          <p><?php the_tags('Tags - ') ?></p>
        </div>
      <a/>
    </article>
  <?php endwhile; ?>
    <div id="nav-below" class="loader">
      <?php posts_nav_link(' &#183; ', '', '<p>Mas Entradas</p>'); ?>
    </div>
  <?php else: ?>
    <h1>Hola, no existe ninguna entrada disponible. Tal vez, deberias de buscar en otra pagina, intentalo talvez tengas suerte.</h1>
  <?php endif; ?>
</div>

<?php get_footer() ?>
