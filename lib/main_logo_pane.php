<?php
	if(isset($_POST["Ideas_main_logo"])){
		$Ideas_main_logo = $_POST["Ideas_main_logo"];
		update_option('Ideas_main_logo',$Ideas_main_logo);
	}
	else if(get_option('Ideas_main_logo')){
		$Ideas_main_logo = get_option('Ideas_main_logo');
	}
	else{
		add_option( 'Ideas_main_logo', '', '', 'yes' );
	}
?>
<div class="wrap srp">
	<h2>Main Logo</h2>
	<br class="clear">
	<form action="#" method='post'>
		<div>
			<input type="text" name="Ideas_main_logo" id="Ideas_main_logo"  size="50" value=""/>
			<input class="onetarek-upload-button button" type="button" name="upload_image_button" id="upload_image_button" value="Upload logo" />
		</div>
		<br>
		<div>
			<input type="submit" name="Ideas_submit_main_logo"  value="Submit" />
		</div>
	</form>
</div>




