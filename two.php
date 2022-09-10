<?php
require_once "new1/four.php";
require "new1/four.php";
echo "hi <br>";
echo "bye <br>";
echo 'hi priya';
$x="hey";
$y=10;
$p=20;
echo "$p+$y"."<br>";
echo "sum is ".$y+$p."<br>";
mysqli_connect('localhost','root','');
if($y=='10'){
	echo "ten <br>";
}
else{
	echo "not ten <br>";
}
die("error:next can't open");
for($i=0;$i<5;$i++){
	echo "hi <BR>";
	
}

?>
<input type="text" value="<?php echo $x ?>"></input>