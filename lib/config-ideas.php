<div class="wrap srp">
    <h2>Ideas' Template Configuration</h2>
    <br class="clear">

    <?php
		if(get_option('ideas_analitycs')){
			$ideas_analitycs = get_option('ideas_analitycs');
		}else{
			add_option( 'ideas_analitycs', '', '', 'yes' );
		}
		if(isset($_POST["analitycs"])){
			$analitycs = $_POST["analitycs"];
			update_option('ideas_analitycs',$analitycs);
		}
		else if(get_option('ideas_analitycs')){
			$analitycs = get_option('ideas_analitycs');
		}
		else{
			add_option( 'ideas_analitycs', '', '', 'yes' );
		}
		$ideas_analitycs = get_option('ideas_analitycs');
	?>
	<div class="wrap srp">
		<h3>Google Analitycs</h3>
		<br class="clear">

		<form action="#" method='post'>
			<input type="text" name="analitycs" value="<?php echo $ideas_analitycs; ?>" size="50">
			<input type="submit" value="Submit">
		</form>
	</div>
</div>