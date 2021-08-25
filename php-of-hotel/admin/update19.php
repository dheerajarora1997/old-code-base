<?php
require "conn.php";
$result=mysql_query("update indexpage set voffprice='$_POST[voffprice]', vregularprice='$_POST[vregularprice]',vpeakprice='$_POST[vpeakprice]'");
if($result)	
header('location:accomodation.php');
else
echo 'Error To Update!';
?>
