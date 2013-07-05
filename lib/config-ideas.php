<div class="wrap srp">
    <h2>Ideas' Template Configuration</h2>
    <br class="clear">

    <?php
		if(get_option('ideas_analitycs')){
			$ideas_analitycs = get_option('ideas_analitycs');
		}else{
			add_option( 'ideas_analitycs', '', '', 'yes' );
		}
		if(get_option('ideas_searchform')){
			$ideas_searchform = get_option('ideas_searchform');
		}else{
			add_option( 'ideas_searchform', '', '', 'yes' );
		}
		if(isset($_POST["analitycs"])){
			$analitycs = $_POST["analitycs"];
			$serachform = $_POST["serachform"];
			update_option('ideas_analitycs',$analitycs);
			update_option('ideas_searchform',$serachform);
		}
		$ideas_analitycs = get_option('ideas_analitycs');
		$ideas_searchform = get_option('ideas_searchform');
	?>
	<div class="wrap srp">
		<form action="#" method='post'>
			<h3>Google Analitycs</h3>
			<br class="clear">
			<input type="text" name="analitycs" value="<?php echo $ideas_analitycs; ?>" size="50">
			<br class="clear">
			<h3>U want a search form?</h3>
			<input type="checkbox" name="serachform" <?php echo ($ideas_searchform == 'on') ? 'checked= "checked"' : ""; ?> >
			<br class="clear">
			<br class="clear">
			<input type="submit" value="Submit">
		</form>
	</div>
</div>