<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Open Dev
 * @subpackage Ideas
 * @since Ideas 1.0
 */

get_header() ?>

<div id="space"></div>

<div id="container" class="cf">
  <?php wp_reset_query() ?>
  <div id="page">
  	<h1><?php the_title() ?></h1>
  	<?php the_content() ?>
  </div>
</div>

<?php get_footer() ?>