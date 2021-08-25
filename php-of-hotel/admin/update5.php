<?php
$dn=@($_FILES[pick][name]);
 $dtmp=@($_FILES[pick][tmp_name]);
 if(move_uploaded_file($dtmp,"images/$dn"))
  echo'Data Uploaded!<br>';
 else
  echo'Error to Upload Data!<br>';
/* $dn=@($_FILES[p1r][name]);
  $dtmp=@($_FILES[p1r][tmp_name]);
 if(move_uploaded_file($dtmp,"images/$dn"))
  echo'Data Uploaded!<br>';
 else
  echo'Error to Upload Data!<br>';
*/
require "conn.php";
$result=mysql_query("update indexpage set p1r='$dn'");
$result=mysql_query("update indexpage set rn1='$_POST[rn1]'");
$result=mysql_query("update indexpage set r1='$_POST[r1]'");
if($result)	
header('location:hindex.php');
else
echo 'Error To Update!';
?>
