<?php
//date and time
echo date(' D d m Y h:i:s',time());
$ctime=strtotime("+ 5 hours 30 minutes");
echo date('D d m Y h:i:s',$ctime);
$mtime=strtotime("- 1 days 5 hours 30 minutes");
echo date('D d m Y h:i:s',$mtime);
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['SCRIPT_NAME'];
?>