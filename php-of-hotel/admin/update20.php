<?php
require "conn.php";
$result=mysql_query("update indexpage set foffprice='$_POST[foffprice]', fregularprice='$_POST[fregularprice]',fpeakprice='$_POST[fpeakprice]'");
if($result)	
header('location:accomodation.php');
else
echo 'Error To Update!';
?>
