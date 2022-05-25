<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css"> <!-- link to the stylesheet -->
	<title>Upload progress bar</title>
</head>
<body>

	<h2>Upload File</h2>
	
	<form name="upload-form" >

		<label>Select file to upload</label>
		<input name="file" type="file">
		<input type="submit" name="submit" value="Upload file">

		<progress value="0" max="100"></progress>

		<p class="error"></p>
		<p class="success"></p>
	</form>

	<script src="script.js"></script> <!-- link to the javascript file -->
</body>
</html>
