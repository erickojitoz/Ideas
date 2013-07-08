jQuery(document).ready(function(){
  social_networks_events();
});

function social_networks_events(){
	jQuery('#submit_social_networks').on('click',function(){
		var netone = jQuery("#Ideas_social_network_one_choose").prop("selectedIndex");
		var nettwo = jQuery("#Ideas_social_network_two_choose").prop("selectedIndex");
		var netthree = jQuery("#Ideas_social_network_three_choose").prop("selectedIndex");
		var netfour = jQuery("#Ideas_social_network_four_choose").prop("selectedIndex");
		var netfive = jQuery("#Ideas_social_network_five_choose").prop("selectedIndex");
		var indexes = new Array(netone,nettwo,netthree,netfour,netfive);
		var validate = new Array('','','','','','','','','','','','');
		var error_show = "";
		var error_message = new Array('',
		'Facebook cannot be selected more than once',
		'Twitter cannot be selected more than once',
		'SoundCloud cannot be selected more than once',
		'Google Plus cannot be selected more than once',
		'Skype cannot be selected more than once',
		'Linkedin cannot be selected more than once',
		'Email cannot be selected more than once',
		'Youtube cannot be selected more than once',
		'Pinterest cannot be selected more than once',
		'Instagran cannot be selected more than once',
		'Github cannot be selected more than once');
		
		validate[0] = "";
		for(var i = 0; i < indexes.length; i++){
			switch(indexes[i]){
				case 1:
					 validate[1] += "0";
					break
				case 2:
					validate[2] += "0";
					break;
				case 3:
					validate[3] += "0";
					break;
				case 4:
					validate[4] += "0";
					break;
				case 5:
					validate[5] += "0";
					break;
				case 6:
					validate[6] += "0";
					break;
				case 7:
					validate[7] += "0";
					break;
				case 8:
					validate[8] += "0";
					break;
				case 9:
					validate[9] += "0";
					break;
				case 10:
					validate[10] += "0";
					break;
				case 11:
					validate[11] += "0";
					break;
			}
		}
		
		for(i = 0;i < validate.length; i++){
			if( validate[i].length > 1 ){
				error_show += error_message[i];
			}
		}
		
		if(error_show.length > 0){
			alert(error_show);
		}
		else{
			jQuery("#Ideas_social_network_form").submit();
		}
	});
}