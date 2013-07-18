<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package Open Dev
 * @subpackage Ideas
 * @since Ideas 1.0
 */
?>
<?php get_header() ?>

<section id="cat-header">
  <img src="<?php bloginfo('template_directory') ?>/img/cat-head.jpg">
  <div class="cat-title">
  	<div class="ctitle"><h1><?php single_cat_title() ?></h1></div>
	<div class="cdesc"><p><?php echo category_description() ?></p></div>
  </div>
</section>

<div id="portfolio" class="cf">
	<?php if (have_posts()) : while (have_posts()) : the_post(); $category = get_the_category(); ?>
		<article class="post span4">
			<div class="post-img">
				<?php if ( has_post_thumbnail()) : ?>
			  	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			  	<?php the_post_thumbnail('post-img'); ?>
			  	</a>
				<?php endif; ?>
			</div>
			<a href="<?php the_permalink(); ?>">
				<div class="post-title">
					<h1><?php the_title() ?></h1>
					<p><?php the_tags('Project - ') ?></p>
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