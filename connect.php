<?php
$servername="127.0.0.1";
$username="root";
$db="stepup";
$pass="";
$con=  mysql_connect($servername,$username,$pass,$db)or die(mysql_error());
mysql_select_db("stepup",$con); 
?>