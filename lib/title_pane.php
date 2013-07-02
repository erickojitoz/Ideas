<?php

	if(isset($_POST["main_title_field"])){
		$main_title_field = $_POST["main_title_field"];
		update_option('ideas_main_title',$main_title_field);
	}
	else if(get_option('ideas_main_title')){
		$main_title_field = get_option('ideas_main_title');
	}
	else{
		add_option( 'ideas_main_title', '', '', 'yes' );
	}
?>
<div class="wrap srp">
	<h2>Ideas Title</h2>
	<br class="clear">
	
	<form action="#" method='post'>
		<input type="text" name="main_title_field" value="<?php echo $main_title_field; ?>" size="50">
		<input type="submit" value="Submit">
	</form>
</div>