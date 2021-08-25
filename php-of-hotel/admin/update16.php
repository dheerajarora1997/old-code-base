<?php
$dn=@($_FILES[pic][name]);
 $dtmp=@($_FILES[pic][tmp_name]);
 if(move_uploaded_file($dtmp,"images/$dn"))
  echo'Data Uploaded!<br>';
 else
  echo'Error to Upload Data!<br>';
require "conn.php";
$result=mysql_query("update indexpage set pic='$dn'");
if($result)	
header('location:hindex.php');
else
echo 'Error To Update!';
?>
