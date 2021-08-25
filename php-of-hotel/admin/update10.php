<?php
$dn=@($_FILES[pick6][name]);
 $dtmp=@($_FILES[pick6][tmp_name]);
 if(move_uploaded_file($dtmp,"images/$dn"))
  echo'Data Uploaded!<br>';
 else
  echo'Error to Upload Data!<br>';
require "conn.php";
$result=mysql_query("update indexpage set p6r='$dn'");
$result=mysql_query("update indexpage set rn6='$_POST[rn6]'");
$result=mysql_query("update indexpage set r6='$_POST[r6]'");
if($result)	
header('location:hindex.php');
else
echo 'Error To Update!';

?>
