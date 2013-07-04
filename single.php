<?php get_header() ?>

<div id="space"></div>

<div id="container" class="cf">
  <?php wp_reset_query() ?>	
  <div id="page">
  	<h1><?php the_title() ?></h1>
  	<?php the_content() ?>
  </div>
</div>

<?php get_footer() ?>