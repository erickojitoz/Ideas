<div class="wrap srp">
    <h1>General Configuration</h1>
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
		<form action="#" method='post'>
			<div>
				<h3>Main Title</h3>
				<input type="text" name="main_title_field" id="main_title_field" value="<?php echo $main_title_field; ?>" size="50">
			</div>
			<div>
				<h3>Main Subtitle</h3>
	            <input type="text" name="main_subtitle_field" id="main_subtitle_field" value="<?php echo $main_subtitle_field; ?>" size="50" />
	        </div>
			<div>
				<input type="submit" value="Save Changes">
			</div>
		</form>
	</div>
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
		<form action="#" method='post'>
			<h3>Logo</h3>
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
			<textarea name="analitycs" value="<?php echo $ideas_analitycs; ?>"></textarea>
			<h3>Search Form</h3>
			<input type="checkbox" name="searchform" <?php echo ($ideas_searchform == 'on') ? 'checked= "checked"' : ""; ?> >
			<label for="searchform">Click to enable search form.</label>
			<br class="clear">
			<input type="submit" value="Save Changes">
		</form>
	</div>
</div>