<?php
include 'viewscount.php';
if(isset($_FILES['userfile']['name'])){
	$name=$_FILES['userfile']['name'];
	echo $name;
	echo $_FILES['userfile']['size'];
	$temp=$_FILES['userfile']['tmp_name'];
	echo $temp;
	$location='uploads/';
	$new_name=$location.$name;
	echo $new_name;
	if(!empty($name)){
		if(move_uploaded_file($temp,$new_name)){
			echo 'file uploaded';
		}
	}
	else{
		echo 'please select a file';
	}
}

?>
<br><br>
<form action='uploadfile.php' method="POST" enctype="multipart/form-data">
<input type="file" name="userfile"><br><br>
<input type="submit" value="upload">
</form>