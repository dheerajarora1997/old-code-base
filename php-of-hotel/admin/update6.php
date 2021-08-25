<?php
$dn=@($_FILES[pick2][name]);
 $dtmp=@($_FILES[pick2][tmp_name]);
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
$result=mysql_query("update indexpage set p2r='$dn'");
$result=mysql_query("update indexpage set rn2='$_POST[rn2]'");
$result=mysql_query("update indexpage set r2='$_POST[r2]'");
if($result)	
header('location:hindex.php');
else
echo 'Error To Update!';
?>
