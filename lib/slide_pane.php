<?php
	$url = get_template_directory().'/lib/slide.json';
	$slideJson = null;
	if(file_exists($url)){
		$slideJson = json_decode(file_get_contents($url),true);
	}
	if($slideJson != null && array_key_exists('d', $_POST)){
		unset($slideJson[$_POST['d']]);
		file_put_contents($url, json_encode($slideJson));
	}
	if(array_key_exists('image_location', $_POST)){
		$slideJson[] = array(
			'image' => $_POST['image_location'],
			'description' => $_POST['description']
		);
		file_put_contents($url, json_encode($slideJson));
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
			<?php $i = 0; ?>
				<?php foreach ($slideJson as $value) { ?>
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
						<input type="hidden" name='d' value='<?php echo $i++; ?>'>
					</form>
				</td>
			</tr>
				<?php } ?>
			<?php } ?>
    </tbody>
  </table>
</div>
