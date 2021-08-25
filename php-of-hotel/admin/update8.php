<?php
$dn=@($_FILES[pick4][name]);
 $dtmp=@($_FILES[pick4][tmp_name]);
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
$result=mysql_query("update indexpage set p4r='$dn'");
$result=mysql_query("update indexpage set rn4='$_POST[rn4]'");
$result=mysql_query("update indexpage set r4='$_POST[r4]'");
if($result)	
header('location:hindex.php');
else
echo 'Error To Update!';

?>
