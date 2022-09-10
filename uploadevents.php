<?php
if(isset($_FILES['userfile']['name'])){
	$name=$_FILES['userfile']['name'];
	$temp=$_FILES['userfile']['tmp_name'];
	$location='eventsuploads/';
	$new_name=$location.$name;
	if(!empty($name)){
		if(move_uploaded_file($temp,$new_name)){
			echo 'file uploaded';
			$f=fopen("events.txt","a");
			fwrite(fopen("events.txt","a"),$new_name." ");
			
		}
	}
	else{
		echo 'please select a file';
	}
}

?>
<br><br>
<form action='uploadevents.php' method="POST" enctype="multipart/form-data">
<input type="file" name="userfile"><br><br>
<input type="submit" value="upload">
</form>