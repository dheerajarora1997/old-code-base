<?php
require "conn.php";
$result=mysql_query("update indexpage set ssroffprice='$_POST[ssroffprice]', ssrregularprice='$_POST[ssrregularprice]',ssrpeakprice='$_POST[ssrpeakprice]'");
if($result)	
header('location:accomodation.php');
else
echo 'Error To Update!';
?>
