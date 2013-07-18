<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Open Dev
 * @subpackage Ideas
 * @since Ideas 1.0
 */
?>
<footer class="cf">
  <div class="sign">
	<a href="http://opendevteam.com/">
	  <img src="<?php bloginfo( 'template_directory' ) ?>/img/sign.png">
	</a>
  </div>
  <?php wp_nav_menu(array(
    'theme_location'  => 'hmenu',
    'menu'            => 'hmenu',
    'container'       => 'div',
    'container_class' => 'fmenu',
    'container_id'    => '',
    'menu_class'      => 'fmenu',
    'menu_id'         => 'fmenu',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="fnav" role="navigation" class="fmenu cf">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
  )) ?>

<?php wp_footer() ?>

<?php if(get_option('ideas_analitycs') && strlen(get_option('ideas_analitycs') > 0)): ?>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<?php echo get_option('ideas_analitycs') ?>']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
<?php endif; ?>
</footer>
</body>
</html>