<?php
require "conn.php";
$result=mysql_query("update indexpage set rinfo='$_POST[rinfo]', rinfo1='$_POST[rinfo1]'");
if($result)	
header('location:contactus.php');
else
echo 'Error To Update!';
?>
