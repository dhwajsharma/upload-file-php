document.forms['upload-form'].onsubmit = function(e){
	e.preventDefault();

	let error = document.querySelector(".error");
	let success = document.querySelector(".success");
	let file = this.file.files[0];  
	error.innerHTML = "";

	if(!file){
		error.innerHTML = "Please select a file";
		return false;
	}

	let formdata = new FormData(); 
	formdata.append("file", file); 
	
	let http = new XMLHttpRequest();
	http.upload.addEventListener("progress", function(event){
		let percent = (event.loaded / event.total) * 100;
		document.querySelector("progress").value = Math.round(percent);
	});

	http.addEventListener("load", function(){
		if(this.readyState == 4 && this.status == 200){
			success.innerHTML = `File ${this.responseText} uploaded successfully`;
		}
	});

	http.open("post", "script.php");
	http.send(formdata);
}
