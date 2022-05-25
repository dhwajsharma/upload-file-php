<?php 
	if(isset($_FILES)){
		$temp_file = $_FILES['file']['tmp_name'];
		$uploads_folder = "uploads/{$_FILES['file']['name']}";
		$upload = move_uploaded_file($temp_file, $uploads_folder);
		if($upload == true){
			echo $_FILES['file']['name'];
		}
	}
