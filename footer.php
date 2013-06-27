<footer class="cf">
  <div class="eologo">
	<a href="http://erickojitoz.com/">
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
</footer>

<?php wp_footer() ?>
</body>
</html>