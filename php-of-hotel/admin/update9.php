<?php
$dn=@($_FILES[pick5][name]);
 $dtmp=@($_FILES[pick5][tmp_name]);
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
$result=mysql_query("update indexpage set p5r='$dn'");
$result=mysql_query("update indexpage set rn5='$_POST[rn5]'");
$result=mysql_query("update indexpage set r5='$_POST[r5]'");
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
