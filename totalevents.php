<?php


session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');



$s ="select * from totalevents ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num>0){
	$_SESSION['events']=$num;
	header('location:home.php');
}



	
	
?>