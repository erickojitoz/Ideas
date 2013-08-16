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

	if(isset($_POST["main_subtitle_field"])){
		$main_subtitle_field = $_POST["main_subtitle_field"];
		update_option('ideas_main_subtitle',$main_subtitle_field);
	}
	else if(get_option('ideas_main_subtitle')){
		$main_subtitle_field = get_option('ideas_main_subtitle');
	}
	else{
		add_option('ideas_main_subtitle','','','yes');
	}
?>
<div class="wrap srp">
	<h2>Ideas Title</h2>
	<br class="clear">	
	<form action="#" method='post'>
		<div>
			<label>
          		Main Title
        	</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="main_title_field" id="main_title_field" value="<?php echo $main_title_field; ?>" size="50">
		</div>
		<div>
			<label>
               Main Subtitle
			</label>
            <input type="text" name="main_subtitle_field" id="main_subtitle_field" value="<?php echo $main_subtitle_field; ?>" size="50" />
        </div>
		<div>
			<input type="submit" value="Submit">
		</div>
	</form>
</div>