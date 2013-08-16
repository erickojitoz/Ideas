jQuery(document).ready(function($) {
	$('.ideastab').hide();
	$('.ideastab').first().show();
	$('.menu_ideas a').click(function(){
		var tab = $(this).attr('href').replace('#', '');
		$('.ideastab').hide();
		$('.'+tab).slideDown();
	});
});