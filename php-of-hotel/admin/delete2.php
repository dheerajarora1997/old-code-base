<?php
session_start();
 if(empty(@($_SESSION[sname])))
  header('location:index.php');

require "conn.php";
$result=mysql_query("delete from custmers2 where sid='$_GET[uid]'");
if($result)
header('location:display1.php');
else
echo 'Error To Delete Data!';

$arr=$_POST['select'];
foreach($arr as $id)
$result=mysql_query("delete from custmers2 where sid='$uid'");

if($result)
header('location:display2.php');
else
echo 'Error To Delete Data!';
?>