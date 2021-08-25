<?php

$dn=@($_FILES[phonepic][name]);

require "conn.php";
$result=mysql_query("update indexpage set phonepic='$dn'");
if($result)	
header('location:contactus.php');
else
echo 'Error To Update!';
?>
