<?php
$dn=@($_FILES[homepic][name]);

require "conn.php";
$result=mysql_query("update indexpage set homepic='$dn'");
if($result)
header('location:contactus.php');
else
echo 'Error To Update!';
?>
