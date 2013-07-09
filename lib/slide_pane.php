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
	<h2>Ideas Slide</h2>
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
