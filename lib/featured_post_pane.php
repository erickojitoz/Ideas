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
 
 
 ?>
 <div class="wrap srp">
	<form name="featured_post_form" id="featured_post_form" action="#" method="post">
		<div>
			<label>
				Featured Post #1
			</label>
			<input type="text" name="Ideas_featured_post_one" id="Ideas_featured_post_one" value="<?php echo $Ideas_featured_post_one; ?>" />
		</div>
		<div>
			<label>
				Featured Post #2
			</label>
			<input type="text" name="Ideas_featured_post_two" id="Ideas_featured_post_two" value="<?php echo $Ideas_featured_post_two; ?>" />
		</div>
		<div>
			<label>
				Featured Post #3
			</label>
			<input type="text" name="Ideas_featured_post_three" id="Ideas_featured_post_three" value="<?php echo $Ideas_featured_post_three; ?>" />
		</div>
		<div>
			<input type="button" name="Ideas_button_featured_post" id="Ideas_button_featured_post" value="Submit">
			<input type="submit" name="Ideas_submit_featured_post" id="Ideas_submit_featured_post" value="Submit"  style="display:none;"/>
		</div>
	</form>
 </div>