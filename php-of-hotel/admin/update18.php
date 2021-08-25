<?php
require "conn.php";
$result=mysql_query("update indexpage set sudroffprice='$_POST[sudroffprice]', sudrregularprice='$_POST[sudrregularprice]',sudrpeakprice='$_POST[sudrpeakprice]'");
if($result)	
header('location:accomodation.php');
else
echo 'Error To Update!';
?>
