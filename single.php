<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Open Dev
 * @subpackage Ideas
 * @since Ideas 1.0
 */

get_header(); ?>

<div id="space"></div>

<div id="container" class="cf">
  <?php wp_reset_query() ?>
  <div id="page">
  	<h1><?php the_title() ?></h1>
  	<?php the_content() ?>
  </div>
  <div id="comments-wrapper">
  	<?php comments_template( ); ?>
  </div>
</div>

<?php get_footer() ?>