<?php
require "conn.php";
$result=mysql_query("update indexpage set remail='$_POST[remail]'");
if($result)	
header('location:contactus.php');
else
echo 'Error To Update!';
?>
