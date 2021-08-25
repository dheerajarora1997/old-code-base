<?php
require "conn.php";
$result=mysql_query("update indexpage set susroffprice='$_POST[susroffprice]', susrregularprice='$_POST[susrregularprice]'");
if($result)	
header('location:accomodation.php');
else
echo 'Error To Update!';
?>
