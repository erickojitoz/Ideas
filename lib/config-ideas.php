<h1>Open Dev's Theme Configuration</h1>
<div class="menu_ideas">
	<ul>
		<li><a href="#titles">Titles</a></li>
		<li><a href="#slide">Slide</a></li>
		<li><a href="#social">Social</a></li>
		<li><a href="#featured">Featured Posts</a></li>
		<li><a href="#analitycs">Google Analitycs</a></li>
		<li><a href="#searchIdeas">Search Form</a></li>
	</ul>
</div>

<div class="ideastab slide">
	<?php
	if(get_option('ideas_slide')){
		$slideJson = json_decode(get_option('ideas_slide'),true);
	}else{
		add_option( 'ideas_slide', '', '', 'yes' );
	}
	if($slideJson != null && array_key_exists('d', $_POST)){
		unset($slideJson[$_POST['d']]);
		update_option('ideas_slide',json_encode($slideJson));
	}
	if(array_key_exists('image_location', $_POST)){
		$slideJson[] = array(
			'image' => $_POST['image_location'],
			'description' => $_POST['description']
		);
		update_option('ideas_slide',json_encode($slideJson));
	}
	?>
	<div class="wrap srp">
		<h3>Ideas Slide</h3>
		<br class="clear">

		<form action="#" method='post'>
			<input id="image_location" type="text" name="image_location" value="" size="50" />
	 		<input  class="onetarek-upload-button button" type="button" value="Upload Image" />
	 		<br />
	 		<label for="description">Description</label>
	 		<textarea name="description" id="description" cols="30" rows="10"></textarea>

			<script type="text/javascript">
			    CKEDITOR.replace( 'description' );
			</script>
			<input type="submit" value='Aceptar'>
		</form>
		<br />
		<table class="wp-list-table widefat fixed users" cellspacing="0">
	  	<thead>
	    	<tr>
	    		<th scope="col" id="id" class="manage-column column-ip" >Image</th>
	    		<th scope="col" id="id" class="manage-column column-ip" >Description</th>
	    		<th scope="col" id="id" class="manage-column column-ip" >Opciones</th>
	    	</tr>
	    </thead>
	    <tbody id="the-list" class="list:user">
				<?php if(count($slideJson) > 0){ ?>
					<?php foreach ($slideJson as $key => $value) { ?>
				<tr class="alternate">
					<td>
						<img src="<?php echo $value['image'] ?>" alt="" width='200' height='100' />
					</td>
					<td>
						<?php echo $value['description']; ?>
					</td>
					<td>
						<form action="#" method='post'>
							<input type="submit"class="button" value="Eliminar">
							<input type="hidden" name='d' value='<?php echo $key; ?>'>
						</form>
					</td>
				</tr>
					<?php } ?>
				<?php } ?>
	    </tbody>
	  </table>
	</div>
</div>

<div class="ideastab wrap srp titles">
  <h3>Titles</h3>
  <br class="clear">
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
				<label for='main_title_field'>Main Title</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="main_title_field" id="main_title_field" value="<?php echo $main_title_field; ?>" size="50">
			</div>
			<div>
				<label for='main_subtitle_field'>Main Subtitle</label>
	      <input type="text" name="main_subtitle_field" id="main_subtitle_field" value="<?php echo $main_subtitle_field; ?>" size="50" />
	    </div>
			<div>
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
</div>

<div class="ideastab social">
	<?php
  // first social network
  if(isset($_POST["Ideas_social_network_one"]) && isset($_POST["Ideas_social_network_one_choose"])){
	$Ideas_social_network_one = $_POST["Ideas_social_network_one"];
	$Ideas_social_network_one_choose = $_POST["Ideas_social_network_one_choose"];
	update_option('Ideas_social_network_one',update_links($Ideas_social_network_one, $Ideas_social_network_one_choose,"insert"));
	update_option('Ideas_social_network_one_choose',$Ideas_social_network_one_choose);
  }
  else if(get_option("Ideas_social_network_one")  && get_option("Ideas_social_network_one_choose")){
	$Ideas_social_network_one = get_option("Ideas_social_network_one");
	$Ideas_social_network_one_choose = get_option("Ideas_social_network_one_choose");
	$Ideas_social_network_one = update_links($Ideas_social_network_one,$Ideas_social_network_one_choose,"retrieve");
  }
  else{
	add_option( 'Ideas_social_network_one', '', '', 'yes' );
	add_option( 'Ideas_social_network_one_choose', '', '', 'yes' );
  }

  // second social network
  if(isset($_POST["Ideas_social_network_two"]) && isset($_POST["Ideas_social_network_two_choose"])){
	$Ideas_social_network_two = $_POST["Ideas_social_network_two"];
	$Ideas_social_network_two_choose = $_POST["Ideas_social_network_two_choose"];
	update_option('Ideas_social_network_two',  update_links($Ideas_social_network_two,$Ideas_social_network_two_choose,"insert"));
	update_option('Ideas_social_network_two_choose',$Ideas_social_network_two_choose);
  }
  else if(get_option("Ideas_social_network_two")  && get_option("Ideas_social_network_two_choose")){
	$Ideas_social_network_two = get_option("Ideas_social_network_two");
	$Ideas_social_network_two_choose = get_option("Ideas_social_network_two_choose");
	$Ideas_social_network_two = update_links($Ideas_social_network_two,$Ideas_social_network_two_choose,"retrieve");
  }
  else{
	add_option( 'Ideas_social_network_two', '', '', 'yes' );
	add_option( 'Ideas_social_network_two_choose', '', '', 'yes' );
  }

  // third social network
  if(isset($_POST["Ideas_social_network_three"]) && isset($_POST["Ideas_social_network_three_choose"])){
	$Ideas_social_network_three = $_POST["Ideas_social_network_three"];
	$Ideas_social_network_three_choose = $_POST["Ideas_social_network_three_choose"];
	update_option('Ideas_social_network_three',update_links($Ideas_social_network_three,$Ideas_social_network_three_choose,"insert"));
	update_option('Ideas_social_network_three_choose',$Ideas_social_network_three_choose);
  }
  else if(get_option("Ideas_social_network_three")  && get_option("Ideas_social_network_three_choose")){
	$Ideas_social_network_three = get_option("Ideas_social_network_three");
	$Ideas_social_network_three_choose = get_option("Ideas_social_network_three_choose");
	$Ideas_social_network_three = update_links($Ideas_social_network_three,$Ideas_social_network_three_choose,"retrieve");
  }
  else{
	add_option( 'Ideas_social_network_three', '', '', 'yes' );
	add_option( 'Ideas_social_network_three_choose', '', '', 'yes' );
  }

  // fourth social network
  if(isset($_POST["Ideas_social_network_four"]) && isset($_POST["Ideas_social_network_four_choose"])){
	$Ideas_social_network_four = $_POST["Ideas_social_network_four"];
	$Ideas_social_network_four_choose = $_POST["Ideas_social_network_four_choose"];
	update_option('Ideas_social_network_four',update_links($Ideas_social_network_four,$Ideas_social_network_four_choose,"insert"));
	update_option('Ideas_social_network_four_choose',$Ideas_social_network_four_choose);
  }
  else if(get_option("Ideas_social_network_four")  && get_option("Ideas_social_network_four_choose")){
	$Ideas_social_network_four = get_option("Ideas_social_network_four");
	$Ideas_social_network_four_choose = get_option("Ideas_social_network_four_choose");
	$Ideas_social_network_four = update_links($Ideas_social_network_four,$Ideas_social_network_four_choose,"retrieve");
  }
  else{
	add_option( 'Ideas_social_network_four', '', '', 'yes' );
	add_option( 'Ideas_social_network_four_choose', '', '', 'yes' );
  }

  // fifth social network
  if(isset($_POST["Ideas_social_network_five"]) && isset($_POST["Ideas_social_network_five_choose"])){
	$Ideas_social_network_five = $_POST["Ideas_social_network_five"];
	$Ideas_social_network_five_choose = $_POST["Ideas_social_network_five_choose"];
	update_option('Ideas_social_network_five',update_links($Ideas_social_network_five,$Ideas_social_network_five_choose,"insert"));
	update_option('Ideas_social_network_five_choose',$Ideas_social_network_five_choose);
  }
  else if(get_option("Ideas_social_network_five")  && get_option("Ideas_social_network_five_choose")){
	$Ideas_social_network_five = get_option("Ideas_social_network_five");
	$Ideas_social_network_five_choose = get_option("Ideas_social_network_five_choose");
	$Ideas_social_network_five = update_links($Ideas_social_network_five,$Ideas_social_network_five_choose,"retrieve");
  }
  else{
	add_option( 'Ideas_social_network_five', '', '', 'yes' );
	add_option( 'Ideas_social_network_five_choose', '', '', 'yes' );
  }
	?>
	<div class="wrap srp">
		<h3>Ideas Social Networks</h3>
		<br class="clear">
		<form action="#" method='post'  id="Ideas_social_network_form"  >
			<div>
				<label>Social Network #1</label>
				&nbsp; <input type="text" name="Ideas_social_network_one" id="Ideas_social_network_one" size="50" value="<?php echo $Ideas_social_network_one; ?>" />
				&nbsp; <select name="Ideas_social_network_one_choose" id="Ideas_social_network_one_choose" >
							<?php echo generateNetworkSelector($Ideas_social_network_one_choose);  ?>
					   </select>
			</div>

			<div>
				<label>Social Network #2</label>
				&nbsp; <input type="text" name="Ideas_social_network_two" id="Ideas_social_network_two" size="50" value="<?php echo $Ideas_social_network_two; ?>" />
				&nbsp; <select name="Ideas_social_network_two_choose" id="Ideas_social_network_two_choose" >
							<?php echo generateNetworkSelector($Ideas_social_network_two_choose);  ?>
					   </select>
			</div>

			<div>
				<label>Social Network #3</label>
				&nbsp; <input type="text" name="Ideas_social_network_three" id="Ideas_social_network_three" size="50" value="<?php echo $Ideas_social_network_three; ?>" />
				&nbsp; <select name="Ideas_social_network_three_choose" id="Ideas_social_network_three_choose" >
							<?php echo generateNetworkSelector($Ideas_social_network_three_choose);  ?>
					   </select>
			</div>

			<div>
				<label>Social Network #4</label>
				&nbsp; <input type="text" name="Ideas_social_network_four" id="Ideas_social_network_four" size="50" value="<?php echo $Ideas_social_network_four; ?>" />
				&nbsp; <select name="Ideas_social_network_four_choose" id="Ideas_social_network_four_choose" >
							<?php echo generateNetworkSelector($Ideas_social_network_four_choose);  ?>
					   </select>
			</div>

			<div>
				<label>Social Network #5</label>
				&nbsp; <input type="text" name="Ideas_social_network_five" id="Ideas_social_network_five" size="50" value="<?php echo $Ideas_social_network_five; ?>" />
				&nbsp; <select name="Ideas_social_network_five_choose" id="Ideas_social_network_five_choose" >
							<?php echo generateNetworkSelector($Ideas_social_network_five_choose);  ?>
					   </select>
			</div>


			<input type="button" value="Submit" name="submit" id="submit_social_networks" />
			<input type="submit" value="" id="submit_button_hidden" name="submit_button_hidden" style="display:none;" >
		</form>
	</div>
</div>

<div class="ideastab featured">
	<?php

	function editFeaturedImagePost($image){
		
		$dimension = "-400x400.";
		
		if( stripos($image, $dimension) == false ){
			$image_data = explode(".",$image);
			$image =  $image_data[0].$dimension.$image_data[1];
		}

		return $image;
	}



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
		update_option('Ideas_featured_image_one',editFeaturedImagePost($Ideas_featured_image_one));
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
		update_option('Ideas_featured_image_two',editFeaturedImagePost($Ideas_featured_image_two));
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
		update_option('Ideas_featured_image_three',editFeaturedImagePost($Ideas_featured_image_three));
	}
	else if(get_option('Ideas_featured_image_three')){
		$Ideas_featured_image_three = get_option('Ideas_featured_image_three');
	}
	else{
		add_option( 'Ideas_featured_image_three', '', '', 'yes' );
	}
 ?>
 <div class="wrap srp">
 	<h3>Featured Posts</h3>
 	<br class="clear">
	<form name="featured_post_form" id="featured_post_form" action="#" method="post">
		<div>
			<div>
				<label>
					Featured Post #1
				</label>
				<input type="text" name="Ideas_featured_post_one" id="Ideas_featured_post_one" value="<?php echo $Ideas_featured_post_one; ?>" />
			</div>
			<div>
				<label>
					Featured Link #1
				</label>
				<input type="text" name="Ideas_featured_link_one" id="Ideas_featured_link_one" value="<?php echo $Ideas_featured_link_one; ?>" />
			</div>
			<div>
				<input type="text" name="Ideas_featured_image_one" id="Ideas_featured_image_one"  size="50" value="<?php echo $Ideas_featured_image_one; ?>"/>
				<input class="onetarek-upload-button button" type="button" name="Ideas_featured_image_one_button" id="Ideas_featured_image_one_button" value="Upload Image #1" />
			</div>
		</div>
		<div>
			<div>
				<label>
					Featured Post #2
				</label>
				<input type="text" name="Ideas_featured_post_two" id="Ideas_featured_post_two" value="<?php echo $Ideas_featured_post_two; ?>" />
			</div>
			<div>
				<label>
					Featured Link #2
				</label>
				<input type="text" name="Ideas_featured_link_two" id="Ideas_featured_link_two" value="<?php echo $Ideas_featured_link_two; ?>" />
			</div>
			<div>
				<input type="text" name="Ideas_featured_image_two" id="Ideas_featured_image_two"  size="50" value="<?php echo $Ideas_featured_image_two; ?>"/>
				<input class="onetarek-upload-button button" type="button" name="Ideas_featured_image_two_button" id="Ideas_featured_image_two_button" value="Upload Image #2" />
			</div>
		</div>
		<div>
			<div>
				<label>
					Featured Post #3
				</label>
				<input type="text" name="Ideas_featured_post_three" id="Ideas_featured_post_three" value="<?php echo $Ideas_featured_post_three; ?>" />
			</div>
			<div>
				<label>
					Featured Link #3
				</label>
				<input type="text" name="Ideas_featured_link_three" id="Ideas_featured_link_three" value="<?php echo $Ideas_featured_link_three; ?>" />
			</div>
			<div>
				<input type="text" name="Ideas_featured_image_three" id="Ideas_featured_image_three"  size="50" value="<?php echo $Ideas_featured_image_three; ?>"/>
				<input class="onetarek-upload-button button" type="button" name="Ideas_featured_image_three_button" id="Ideas_featured_image_three_button" value="Upload Image #3" />
			</div>
		</div>
		<div>
			<input type="button" name="Ideas_button_featured_post" id="Ideas_button_featured_post" value="Submit">
			<input type="submit" name="Ideas_submit_featured_post" id="Ideas_submit_featured_post" value="Submit"  style="display:none;"/>
		</div>
	</form>
 </div>
</div>

<div class="ideastab analitycs">
	<h3>Analitycs</h3>
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
	$ideas_analitycs = get_option('ideas_analitycs');
	?>
	<div class="wrap srp">
		<form action="#" method='post'>
			<label for="analitycs">Google Analitycs</label for="">
			<br class="clear">
			<input type="text" name="analitycs" id="analitycs" value="<?php echo $ideas_analitycs; ?>" size="50">
			<br class="clear">
			<br class="clear">
			<input type="submit" value="Submit">
		</form>
	</div>
</div>

<div class="ideastab searchIdeas">
	<h3>Search Form</h3>
  <br class="clear">
	<?php
		if(get_option('ideas_searchform')){
			$ideas_searchform = get_option('ideas_searchform');
		}else{
			add_option( 'ideas_searchform', '', '', 'yes' );
		}
		if(isset($_POST["searchform"])){
			$serachform = $_POST["searchform"];
			update_option('ideas_searchform',$serachform);
		}
		$ideas_searchform = get_option('ideas_searchform');
	?>
	<div class="wrap srp">
		<form action="#" method='post'>
			<label for="serachform">U want a search form?</label for="">
			<input type="checkbox" name="searchform" id="serachform" <?php echo ($ideas_searchform == 'on') ? 'checked= "checked"' : ""; ?> >
			<br class="clear">
			<br class="clear">
			<input type="submit" value="Submit">
		</form>
	</div>
</div>