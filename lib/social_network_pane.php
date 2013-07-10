<?php
	$msj = null;
	if(!empty($_POST)){
	  if(array_key_exists('Ideas_red_social_facebook_activated', $_POST)){
	  	if( $_POST["Ideas_red_social_facebook_activated"] == 'on'  ){
				$Ideas_red_social_facebook = $_POST["Ideas_red_social_facebook"];
				update_option('Ideas_red_social_facebook',$Ideas_red_social_facebook);
			}else{
				add_option( 'Ideas_red_social_facebook', '', '', 'yes' );
			}
	  }else{
			delete_option( 'Ideas_red_social_facebook');
	  }

	  if(array_key_exists('Ideas_red_social_twitter_activated', $_POST)){
	  	if( $_POST["Ideas_red_social_twitter_activated"] == 'on'  ){
				$Ideas_red_social_twitter = $_POST["Ideas_red_social_twitter"];
				update_option('Ideas_red_social_twitter',$Ideas_red_social_twitter);
			}else{
				add_option( 'Ideas_red_social_twitter', '', '', 'yes' );
			}
	  }else{
			delete_option( 'Ideas_red_social_twitter');
	  }

	  if(array_key_exists('Ideas_red_social_google_plus_activated', $_POST)){
	  	if( $_POST["Ideas_red_social_google_plus_activated"] == 'on'  ){
				$Ideas_red_social_google_plus = $_POST["Ideas_red_social_google_plus"];
				update_option('Ideas_red_social_google_plus',$Ideas_red_social_google_plus);
			}else{
				add_option( 'Ideas_red_social_google_plus', '', '', 'yes' );
			}
	  }else{
			delete_option( 'Ideas_red_social_google_plus');
	  }

	  if(array_key_exists('Ideas_red_social_skype_activated', $_POST)){
	  	if( $_POST["Ideas_red_social_skype_activated"] == 'on'  ){
				$Ideas_red_social_skype = $_POST["Ideas_red_social_skype"];
				update_option('Ideas_red_social_skype',$Ideas_red_social_skype);
			}else{
				add_option( 'Ideas_red_social_skype', '', '', 'yes' );
			}
	  }else{
			delete_option( 'Ideas_red_social_skype');
	  }

	  if(array_key_exists('Ideas_red_social_email_activated', $_POST)){
	  	if( $_POST["Ideas_red_social_email_activated"] == 'on'  ){
				$Ideas_red_social_email = $_POST["Ideas_red_social_email"];
				update_option('Ideas_red_social_email',$Ideas_red_social_email);
			}else{
				add_option( 'Ideas_red_social_email', '', '', 'yes' );
			}
	  }else{
			delete_option( 'Ideas_red_social_email');
	  }

	  $msj = "Option saved";
	}


	$Ideas_red_social_facebook = get_option("Ideas_red_social_facebook");
	$Ideas_red_social_twitter = get_option("Ideas_red_social_twitter");
	$Ideas_red_social_google_plus = get_option("Ideas_red_social_google_plus");
	$Ideas_red_social_skype = get_option("Ideas_red_social_skype");
	$Ideas_red_social_email = get_option("Ideas_red_social_email");
?>
<div class="wrap srp">
	<h2>Ideas Social Networks</h2>
	<br class="clear">
	<?php if(isset($msj)): ?>
	<h3><?php echo $msj; ?></h3>
	<?php endif; ?>
	<br class="clear">
	<form action="#" method='post'>
		<label for="Ideas_red_social_facebook_activated">Facebook:</label> &nbsp;
		<input type="checkbox" name="Ideas_red_social_facebook_activated" id="Ideas_red_social_facebook_activated" <?php echo strlen($Ideas_red_social_facebook) > 0 ? 'checked="checked"' : ''; ?> />
		<div id="Ideas_red_social_facebook_wrapper" style='display: inline-block; clear: both;'>
			<input type="text" name="Ideas_red_social_facebook" id="Ideas_red_social_facebook" size="50" value="<?php echo $Ideas_red_social_facebook; ?>" />
		</div>
		<br>
		<label for="Ideas_red_social_twitter_activated">Twitter:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="checkbox" name="Ideas_red_social_twitter_activated" id="Ideas_red_social_twitter_activated"  <?php echo strlen($Ideas_red_social_twitter) > 0 ? 'checked="checked"' : ''; ?> />
		<div id="Ideas_red_social_twitter_wrapper" style='display: inline-block; clear: both;'>
			<input type="text" name="Ideas_red_social_twitter" size="50" value="<?php echo $Ideas_red_social_twitter; ?>" id="Ideas_red_social_twitter"/>
		</div>
		<br>
		<label for="Ideas_red_social_google_plus_activated">Google+:</label> &nbsp;&nbsp;&nbsp;&nbsp;
		<input type="checkbox" name="Ideas_red_social_google_plus_activated" id="Ideas_red_social_google_plus_activated"  <?php echo strlen($Ideas_red_social_google_plus) > 0 ? 'checked="checked"' : ''; ?> />
		<div id="Ideas_red_social_google_plus_wrapper" style='display: inline-block; clear: both;'>
			<input type="text" name="Ideas_red_social_google_plus" size="50" value="<?php echo $Ideas_red_social_google_plus; ?>" id="Ideas_red_social_google_plus"/>
		</div>
		<br>
		<label for="Ideas_red_social_skype_activated">Skype:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="checkbox" name="Ideas_red_social_skype_activated" id="Ideas_red_social_skype_activated"  <?php echo strlen($Ideas_red_social_skype) > 0 ? 'checked="checked"' : ''; ?> />
		<div id="Ideas_red_social_skype_wrapper" style='display: inline-block; clear: both;'>
			<input type="text" name="Ideas_red_social_skype" size="50" value="<?php echo $Ideas_red_social_skype; ?>" id="Ideas_red_social_skype"/>
		</div>
		<br>
		<label for="Ideas_red_social_email_activated">E - Mail:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="checkbox" name="Ideas_red_social_email_activated" id="Ideas_red_social_email_activated"  <?php echo strlen($Ideas_red_social_email) > 0 ? 'checked="checked"' : ''; ?> />
		<div id="Ideas_red_social_email_wrapper" style='display: inline-block; clear: both;'>
			<input type="text" name="Ideas_red_social_email" size="50" value="<?php echo $Ideas_red_social_email; ?>" id="Ideas_red_social_email"/>
		</div>
		<br>
		<input type="submit" value="Submit" name="submit" />
	</form>
</div>