 <?php
	
	if(isset($_POST["Ideas_featured_post_one"])){
		$Ideas_featured_post_one = $_POST["Ideas_featured_post_one"];
		update_option('Ideas_featured_post_one',$Ideas_featured_post_one);
	}
	else if(get_option('Ideas_featured_post_one')){
		$Ideas_featured_post_one = get_option('Ideas_featured_post_one');
	}
	else{
		add_option( 'Ideas_featured_post_one', '', '', 'yes' );
	}
	
	if(isset($_POST["Ideas_featured_link_one"])){
		$Ideas_featured_link_one = $_POST["Ideas_featured_link_one"];
		update_option('Ideas_featured_link_one',$Ideas_featured_link_one);
	}
	else if(get_option('Ideas_featured_link_one')){
		$Ideas_featured_link_one = get_option('Ideas_featured_link_one');
	}
	else{
		add_option( 'Ideas_featured_link_one', '', '', 'yes' );
	}
	
	
	if(isset($_POST["Ideas_featured_image_one"])){
		$Ideas_featured_image_one = $_POST["Ideas_featured_image_one"];
		update_option('Ideas_featured_image_one',$Ideas_featured_image_one);
	}
	else if(get_option('Ideas_featured_image_one')){
		$Ideas_featured_image_one = get_option('Ideas_featured_image_one');
	}
	else{
		add_option( 'Ideas_featured_image_one', '', '', 'yes' );
	}

	
	
	if(isset($_POST["Ideas_featured_post_two"])){
		$Ideas_featured_post_two = $_POST["Ideas_featured_post_two"];
		update_option('Ideas_featured_post_two',$Ideas_featured_post_two);
	}
	else if(get_option('Ideas_featured_post_two')){
		$Ideas_featured_post_two = get_option('Ideas_featured_post_two');
	}
	else{
		add_option( 'Ideas_featured_post_two', '', '', 'yes' );
	}
	
	if(isset($_POST["Ideas_featured_link_two"])){
		$Ideas_featured_link_two = $_POST["Ideas_featured_link_two"];
		update_option('Ideas_featured_link_two',$Ideas_featured_link_two);
	}
	else if(get_option('Ideas_featured_link_two')){
		$Ideas_featured_link_two = get_option('Ideas_featured_link_two');
	}
	else{
		add_option( 'Ideas_featured_link_two', '', '', 'yes' );
	}
	
	if(isset($_POST["Ideas_featured_image_two"])){
		$Ideas_featured_image_two = $_POST["Ideas_featured_image_two"];
		update_option('Ideas_featured_image_two',$Ideas_featured_image_two);
	}
	else if(get_option('Ideas_featured_image_two')){
		$Ideas_featured_image_two = get_option('Ideas_featured_image_two');
	}
	else{
		add_option( 'Ideas_featured_image_two', '', '', 'yes' );
	}
	
	if(isset($_POST["Ideas_featured_post_three"])){
		$Ideas_featured_post_three = $_POST["Ideas_featured_post_three"];
		update_option('Ideas_featured_post_three',$Ideas_featured_post_three);
	}
	else if(get_option('Ideas_featured_post_three')){
		$Ideas_featured_post_three = get_option('Ideas_featured_post_three');
	}
	else{
		add_option( 'Ideas_featured_post_three', '', '', 'yes' );
	}
	
	if(isset($_POST["Ideas_featured_link_three"])){
		$Ideas_featured_link_three = $_POST["Ideas_featured_link_three"];
		update_option('Ideas_featured_link_three',$Ideas_featured_link_three);
	}
	else if(get_option('Ideas_featured_link_three')){
		$Ideas_featured_link_three = get_option('Ideas_featured_link_three');
	}
	else{
		add_option( 'Ideas_featured_link_three', '', '', 'yes' );
	}
	
	if(isset($_POST["Ideas_featured_image_three"])){
		$Ideas_featured_image_three = $_POST["Ideas_featured_image_three"];
		update_option('Ideas_featured_image_three',$Ideas_featured_image_three);
	}
	else if(get_option('Ideas_featured_image_three')){
		$Ideas_featured_image_three = get_option('Ideas_featured_image_three');
	}
	else{
		add_option( 'Ideas_featured_image_three', '', '', 'yes' );
	}
 
 ?>
 <div class="wrap srp">
	<form name="featured_post_form" id="featured_post_form" action="#" method="post">
		
		<div>
			<h3>Featured Post 1</h3>
			<div>
				<label>
					Title:
				</label>
				<input type="text" name="Ideas_featured_post_one" id="Ideas_featured_post_one" value="<?php echo $Ideas_featured_post_one; ?>" />
			</div>
			<div>
				<label>
					Link:
				</label>
				<input type="text" name="Ideas_featured_link_one" id="Ideas_featured_link_one" value="<?php echo $Ideas_featured_link_one; ?>" />
			</div>
			<div>
				<input type="text" name="Ideas_featured_image_one" id="Ideas_featured_image_one"  size="50" value="<?php echo $Ideas_featured_image_one; ?>"/>
				<input class="onetarek-upload-button button" type="button" name="Ideas_featured_image_one_button" id="Ideas_featured_image_one_button" value="Upload Image" />
			</div>
		</div>
		<div>
			<h3>Featured Post 2</h3>
			<div>
				<label>
					Title:
				</label>
				<input type="text" name="Ideas_featured_post_two" id="Ideas_featured_post_two" value="<?php echo $Ideas_featured_post_two; ?>" />
			</div>
			<div>
				<label>
					Link:
				</label>
				<input type="text" name="Ideas_featured_link_two" id="Ideas_featured_link_two" value="<?php echo $Ideas_featured_link_two; ?>" />
			</div>
			<div>
				<input type="text" name="Ideas_featured_image_two" id="Ideas_featured_image_two"  size="50" value="<?php echo $Ideas_featured_image_two; ?>"/>
				<input class="onetarek-upload-button button" type="button" name="Ideas_featured_image_two_button" id="Ideas_featured_image_two_button" value="Upload Image" />
			</div>
		</div>
		<div>
			<h3>Featured Post 3</h3>
			<div>
				<label>
					Title:
				</label>
				<input type="text" name="Ideas_featured_post_three" id="Ideas_featured_post_three" value="<?php echo $Ideas_featured_post_three; ?>" />
			</div>
			<div>
				<label>
					Link:
				</label>
				<input type="text" name="Ideas_featured_link_three" id="Ideas_featured_link_three" value="<?php echo $Ideas_featured_link_three; ?>" />
			</div>
			<div>
				<input type="text" name="Ideas_featured_image_three" id="Ideas_featured_image_three"  size="50" value="<?php echo $Ideas_featured_image_three; ?>"/>
				<input class="onetarek-upload-button button" type="button" name="Ideas_featured_image_three_button" id="Ideas_featured_image_three_button" value="Upload Image" />
			</div>
		</div>
		<div>
			<input type="button" name="Ideas_button_featured_post" id="Ideas_button_featured_post" value="Submit">
			<input type="submit" name="Ideas_submit_featured_post" id="Ideas_submit_featured_post" value="Submit"  style="display:none;"/>
		</div>
	</form>
 </div>