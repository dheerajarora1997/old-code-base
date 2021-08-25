<!DOCTYPE html>
<html>
<head>
<title>booking status</title>
<link  type="text/css" href="admin/style.css">
</head>

<body background="admin/images/templatemo-slide-3.png";>
<center>
<div class="ty">
<?php
echo'name='.@($_POST[name]).'<br>';
echo'lastname='.@($_POST[lastname]).'<br>';
echo'contact='.@($_POST[phone_no]).'<br>';
echo'email='.@($_POST[email]).'<br>';
echo'startdate='.@($_POST[startdate]).'<br>';
echo'enddate='.@($_POST[enddate]).'<br>';
//echo'yourcode='.@($_POST[password]).'<br>';

require"conn.php";
$result=mysql_query("insert into custmer values('','$_POST[name]','$_POST[lastname]',
'$_POST[roomtype]','$_POST[startdate]','$_POST[enddate]',
'$_POST[phone_no]',
'$_POST[password]','$_POST[email]')");

require"conn.php";
if($result)
$result=mysql_query("insert into custmers2 values('','$_POST[name]','$_POST[lastname]',
'$_POST[roomtype]',
'$_POST[phone_no]',
'$_POST[startdate]',
'$_POST[enddate]','$_POST[password]')");

if($result)
echo 'data inserted';

?>

<a href="index.php" >back </a>
</div>
</center>
</body>
</html>