<?php
  if(isset($_POST["Ideas_red_social_facebook"])){
	$Ideas_red_social_facebook = $_POST["Ideas_red_social_facebook"];
	update_option('Ideas_red_social_facebook',$Ideas_red_social_facebook);
  }
  else if(get_option("Ideas_red_social_facebook")){
	$Ideas_red_social_facebook = get_option("Ideas_red_social_facebook");
  }
  else{
	add_option( 'Ideas_red_social_facebook', '', '', 'yes' );
  }
  
  if(isset($_POST["Ideas_red_social_twitter"])){
	$Ideas_red_social_twitter = $_POST["Ideas_red_social_twitter"];
	update_option('Ideas_red_social_twitter',$Ideas_red_social_twitter);
  }
  else if(get_option("Ideas_red_social_twitter")){
	$Ideas_red_social_twitter = get_option("Ideas_red_social_twitter");
  }
  else{
	add_option( 'Ideas_red_social_twitter', '', '', 'yes' );
  }
  
  if(isset($_POST["Ideas_red_social_google_plus"])){
	$Ideas_red_social_google_plus = $_POST["Ideas_red_social_google_plus"];
	update_option('Ideas_red_social_google_plus',$Ideas_red_social_google_plus);
  }
  else if(get_option("Ideas_red_social_google_plus")){
	$Ideas_red_social_google_plus = get_option("Ideas_red_social_google_plus");
  }
  else{
	add_option( 'Ideas_red_social_google_plus', '', '', 'yes' );
  }
  
  if(isset($_POST["Ideas_red_social_skype"])){
	$Ideas_red_social_skype = $_POST["Ideas_red_social_skype"];
	update_option('Ideas_red_social_skype',$Ideas_red_social_skype);
  }
  else if(get_option("Ideas_red_social_skype")){
	$Ideas_red_social_skype = get_option("Ideas_red_social_skype");
  }
  else{
	add_option( 'Ideas_red_social_skype', '', '', 'yes' );
  }
  
  if(isset($_POST["Ideas_red_social_email"])){
	$Ideas_red_social_email = $_POST["Ideas_red_social_email"];
	update_option('Ideas_red_social_email',$Ideas_red_social_email);
  }
  else if(get_option("Ideas_red_social_email")){
	$Ideas_red_social_email = get_option("Ideas_red_social_email");
  }
  else{
	add_option( 'Ideas_red_social_email', '', '', 'yes' );
  }
  
?>
<div class="wrap srp">
	<h2>Ideas Social Networks</h2>
	<br class="clear">
	<form action="#" method='post'>
		<label>Facebook:</label> &nbsp; <input type="text" name="Ideas_red_social_facebook" size="50" value="<?php echo $Ideas_red_social_facebook; ?>" />
		<br>
		<label>Twitter:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Ideas_red_social_twitter" size="50" value="<?php echo $Ideas_red_social_twitter; ?>" />
		<br>
		<label>Google+:</label> &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Ideas_red_social_google_plus" size="50" value="<?php echo $Ideas_red_social_google_plus; ?>" />
		<br>
		<label>Skype:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Ideas_red_social_skype" size="50" value="<?php echo $Ideas_red_social_skype; ?>" />
		<br>
		<label>E - Mail:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Ideas_red_social_email" size="50" value="<?php echo $Ideas_red_social_email; ?>" />
		<br>
		<input type="submit" value="Submit" name="submit" />
	</form>
</div>