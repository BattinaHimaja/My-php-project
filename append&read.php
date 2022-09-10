<?php

if(isset($_POST['day'])){
	if(!(empty($_POST['day']))){
fopen('formoutput.txt','a');
fwrite(fopen('formoutput.txt','a'),$_POST['day']."\n");
	}
	else{
	fopen('formoutput.txt','a');
fwrite(fopen('formoutput.txt','a'),'no input'."\n");
}
}
echo 'NAMES';
$r=file('formoutput.txt');
$ct=count($r);
$c=1;
foreach ($r as $t){
	if($c<$ct){
	echo trim($t).' , ';
	}
	else{
		echo trim($t);
	}
	$c=$c+1;
}

?>
<form action="append&read.php" method="POST">

Day:<input type="text" name="day">
<br>

<input type="submit" name="submit">


</form>