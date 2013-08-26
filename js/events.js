jQuery(document).ready(function(){
  social_networks_events();
  featured_post();
});

function social_networks_events(){
	jQuery('#submit_social_networks').on('click',function(){
			
		var netone = jQuery("#Ideas_social_network_one_choose").prop("selectedIndex");
		var nettwo = jQuery("#Ideas_social_network_two_choose").prop("selectedIndex");
		var netthree = jQuery("#Ideas_social_network_three_choose").prop("selectedIndex");
		var netfour = jQuery("#Ideas_social_network_four_choose").prop("selectedIndex");
		var netfive = jQuery("#Ideas_social_network_five_choose").prop("selectedIndex");
		var indexes = new Array(netone,nettwo,netthree,netfour,netfive);
		var linkone = jQuery("#Ideas_social_network_one").val();
		var linktwo = jQuery("#Ideas_social_network_two").val();
		var linkthree = jQuery("#Ideas_social_network_three").val();
		var linkfour = jQuery("#Ideas_social_network_four").val();
		var linkfive = jQuery("#Ideas_social_network_five").val();
		var links = new Array(linkone,linktwo,linkthree,linkfour,linkfive);
		
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
		
		var error_link_message = new Array('',
		"Facebook link doesn't match ",
		"Twitter link doesn't match ",
		"SoundCloud link doesn't match ",
		"Google Plus link doesn't match ",
		"Skype link doesn't match ",
		"Linkedin link doesn't match ",
		"Email link doesn't match ",
		"Youtube link doesn't match ",
		"Pinterest link doesn't match ",
		"Instagran link doesn't match ",
		"Github link doesn't match "
		);
		
		var skype_regexp = /^[a-zA-Z][a-zA-Z0-9_\-\,\.]{5,31}/;
		var email_regexp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		validate[0] = "";
		for(var i = 0; i < indexes.length; i++){
			switch(indexes[i]){
				case 1:
					 validate[1] += "0";
					 if( links[i].length == 0  ){
						error_show += error_link_message[1];
					 }
					break
				case 2:
					validate[2] += "0";
					if( links[i].length == 0  ){
						error_show += error_link_message[2];
					 }
					break;
				case 3:
					validate[3] += "0";
					if( links[i].length == 0  ){
						error_show += error_link_message[3];
					 }
					break;
				case 4:
					validate[4] += "0";
					if( links[i].length == 0  ){
						error_show += error_link_message[4];
					 }
					break;
				case 5:
					validate[5] += "0";
					if(skype_regexp.test(links[i]) == false){
						error_show += error_link_message[5];
					}
					break;
				case 6:
					validate[6] += "0";
					if( links[i].length == 0  ){
						error_show += error_link_message[6];
					}
					break;
				case 7:
					validate[7] += "0";
					if( email_regexp.test(links[i]) == false ){
						error_show += error_link_message[7];
					}
					break;
				case 8:
					validate[8] += "0";
					if( links[i].length == 0  ){
						error_show += error_link_message[8];
					}
					break;
				case 9:
					validate[9] += "0";
					if( links[i].length == 0  ){
						error_show += error_link_message[9];
					}
					break;
				case 10:
					validate[10] += "0";
					if( links[i].length == 0  ){
						error_show += error_link_message[10];
					}
					break;
				case 11:
					validate[11] += "0";
					if( links[i].length == 0  ){
						error_show += error_link_message[11];
					}
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
			jQuery("#submit_button_hidden").trigger('click');
		}
	});
}

function featured_post(){
	jQuery("#Ideas_button_featured_post").on('click',function(){
		var error_showed = "";
		
		if(jQuery("#Ideas_featured_post_one").val() == "" ){
			error_showed += "Featured Post one cannot be blank \n";
		}
		
		if(jQuery("#Ideas_featured_post_two").val() == "" ){
			error_showed += "Featured Post two cannot be blank \n";
		}
		
		if(jQuery("#Ideas_featured_post_three").val() == ""){
			error_showed += "Featured Post three cannot be blank \n";
		}
		
		if( error_showed.length == 0 ){
			jQuery("#Ideas_submit_featured_post").trigger('click');
		}
		else{
			alert(error_showed);
		}
	});
}