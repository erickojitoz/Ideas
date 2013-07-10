<?php
/**
 * The template for displaying search forms in Open Ideas
 *
 * @package Open Dev
 * @subpackage Ideas
 * @since Ideas 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search' ); ?>" />
	</form>
