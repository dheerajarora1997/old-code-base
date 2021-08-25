<?php
require "conn.php";
$result=mysql_query("update indexpage set sdroffprice='$_POST[sdroffprice]', sdrreqularprice='$_POST[sdrreqularprice]',sdrpeakprice='$_POST[sdrpeakprice]'");
if($result)	
header('location:accomodation.php');
else
echo 'Error To Update!';
?>
