<?php
@mysqli_connect('localhost','root','') || die("can't connect");
echo 'connected';
$id="one";
echo "<style>
#one{
	background-color:green;
	margin:60px;
}
</style>";
$x=1;
function static1(){
	static $k=0;
	echo $k;
	$k=$k+1;
}
static1();
static1();
static1();
echo "<br>".$x;
echo 'hi<pre>               </pre>priya';
function add($a,$b){
	global $x;
	echo  $x;
	$h=201;
	return $h;
	return $a+$b;
	
}
//arrays
$arr=array(10,20,30);
echo ($arr[2]);
$arr[2]=80;
print_r($arr);
//associative arrays
$arr1=array('a'=>1,'b'=>2,"c"=>3);
foreach($arr1 as $k=>$v){
	echo $k." ".$v;
}
print_r($arr1['a']);
//multidimensional arrays
$arr2=array("a"=>array(1,2,3),"b"=>array("i","ii","iii"));
echo $arr2["b"][2];

//local,global,static variables

//string functions
echo "hi <img src='one.jpg'>";
echo htmlentities("hi <img src='two.jpg'>");
echo htmlentities(addslashes("hi <img src='two.jpg'>"));
echo stripslashes(htmlentities(addslashes("hi <img src='two.jpg'>")));
$s="abc def ghis & .";
echo str_word_count($s,0,"&");
echo str_shuffle($s);
echo strlen("abcd");
similar_text("bye hi","bye",$res);
echo strrev("hi");
echo $res;
?>
<h1 id="<?php echo "$id" ?>">Box1</h1>