<?php

function update_links($links,$network,$mode){

  if($mode == "insert"){
 if($network == "skype"){
 	$links = "skype:".$links."?call";
 }
  else if($network == "ownEmail"){
 	$links = "mailto:".$links;
 }
  }
  else if($mode == "retrieve"){
   

 if($network == "skype"){
  $links = str_replace("skype:","",$links);
  $links = str_replace("?call","",$links);
 }
 else if($network == "ownEmail"){
 	$links = str_replace("mailto:",$links);
 }
  }
 return $links;
}

function generateNetworkSelector($network){

 $Ideas_select_field_array = array("","facebook","twitter","soundcloud","googleplus","skype","linkedin","ownEmail","youtube","pinterest","instagram","github");
 $Ideas_select_field_show_array = array("","Facebook","Twitter","Sound Cloud","Google Plus","Skype","Linkedin","Email","Youtube","Pinterest","Instagram","Github");
 $ideas_show = "";
 for( $i = 0; $i < count($Ideas_select_field_array); $i++ ){
 	  
 	 if( $Ideas_select_field_array[$i] == $network ){
 	 $ideas_show .= "<option value='$Ideas_select_field_array[$i]' selected>$Ideas_select_field_show_array[$i]</option>";
 	 }
 	 else{
 	 $ideas_show .= "<option value='$Ideas_select_field_array[$i]'>$Ideas_select_field_show_array[$i]</option>";
 	 }
 }
 return $ideas_show;
}


  // first social network
  if(isset($_POST["Ideas_social_network_one"]) && isset($_POST["Ideas_social_network_one_choose"])){
 $Ideas_social_network_one = $_POST["Ideas_social_network_one"];
 $Ideas_social_network_one_choose = $_POST["Ideas_social_network_one_choose"];
 update_option('Ideas_social_network_one',update_links($Ideas_social_network_one, $Ideas_social_network_one_choose,"insert"));
 update_option('Ideas_social_network_one_choose',$Ideas_social_network_one_choose);
  }
  else if(get_option("Ideas_social_network_one") && get_option("Ideas_social_network_one_choose")){
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
 update_option('Ideas_social_network_two', update_links($Ideas_social_network_two,$Ideas_social_network_two_choose,"insert"));
 update_option('Ideas_social_network_two_choose',$Ideas_social_network_two_choose);
  }
  else if(get_option("Ideas_social_network_two") && get_option("Ideas_social_network_two_choose")){
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
  else if(get_option("Ideas_social_network_three") && get_option("Ideas_social_network_three_choose")){
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
  else if(get_option("Ideas_social_network_four") && get_option("Ideas_social_network_four_choose")){
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
  else if(get_option("Ideas_social_network_five") && get_option("Ideas_social_network_five_choose")){
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
 <h2>Ideas Social Networks</h2>
 <br class="clear">
 <form action="#" method='post' id="Ideas_social_network_form" >
 	<div>
 	 <label>Social Network #1</label>
 	 &nbsp; <input type="text" name="Ideas_social_network_one" id="Ideas_social_network_one" size="50" value="<?php echo $Ideas_social_network_one; ?>" />
 	 &nbsp; <select name="Ideas_social_network_one_choose" id="Ideas_social_network_one_choose" >
 	 <?php echo generateNetworkSelector($Ideas_social_network_one_choose); ?>
 	 </select>
 	</div>
 	 
 	<div>
 	 <label>Social Network #2</label>
 	 &nbsp; <input type="text" name="Ideas_social_network_two" id="Ideas_social_network_two" size="50" value="<?php echo $Ideas_social_network_two; ?>" />
 	 &nbsp; <select name="Ideas_social_network_two_choose" id="Ideas_social_network_two_choose" >
 	 <?php echo generateNetworkSelector($Ideas_social_network_two_choose); ?>
 	 </select>
 	</div>
 	 
 	<div>
 	 <label>Social Network #3</label>
 	 &nbsp; <input type="text" name="Ideas_social_network_three" id="Ideas_social_network_three" size="50" value="<?php echo $Ideas_social_network_three; ?>" />
 	 &nbsp; <select name="Ideas_social_network_three_choose" id="Ideas_social_network_three_choose" >
 	 <?php echo generateNetworkSelector($Ideas_social_network_three_choose); ?>
 	 </select>
 	</div>
 	 
 	<div>
 	 <label>Social Network #4</label>
 	 &nbsp; <input type="text" name="Ideas_social_network_four" id="Ideas_social_network_four" size="50" value="<?php echo $Ideas_social_network_four; ?>" />
 	 &nbsp; <select name="Ideas_social_network_four_choose" id="Ideas_social_network_four_choose" >
 	 <?php echo generateNetworkSelector($Ideas_social_network_four_choose); ?>
 	 </select>
 	</div>
 	 
 	<div>
 	 <label>Social Network #5</label>
 	 &nbsp; <input type="text" name="Ideas_social_network_five" id="Ideas_social_network_five" size="50" value="<?php echo $Ideas_social_network_five; ?>" />
 	 &nbsp; <select name="Ideas_social_network_five_choose" id="Ideas_social_network_five_choose" >
 	 <?php echo generateNetworkSelector($Ideas_social_network_five_choose); ?>
 	 </select>
 	</div>
 	 
 	 
 	<input type="button" value="Submit" name="submit" id="submit_social_networks" />
 	<input type="submit" value="" id="submit_button_hidden" name="submit_button_hidden" style="display:none;" >
 </form>
</div>