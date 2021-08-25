<?php
$dn=@($_FILES[pick3][name]);
 $dtmp=@($_FILES[pick3][tmp_name]);
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
$result=mysql_query("update indexpage set p3r='$dn'");
$result=mysql_query("update indexpage set rn3='$_POST[rn3]'");
$result=mysql_query("update indexpage set r3='$_POST[r3]'");
if($result)	
header('location:hindex.php');
else
echo 'Error To Update!';


/*
require "conn.php";
$result=mysql_query("update indexpage set p3r='$_POST[p3r]', rn3='$_POST[rn3]', r3='$_POST[r3]'");
if($result)	
header('location:hindex.php');
else
echo 'Error To Update!';
*/?>
