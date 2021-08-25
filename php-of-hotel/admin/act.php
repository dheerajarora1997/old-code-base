<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
echo'name='.@($_POST[uname]).'<br>';
echo'contact='.@($_POST[phone]).'<br>';
echo'email='.@($_POST[email]).'<br>';
echo'subject='.@($_POST[subject]).'<br>';
echo'message='.@($_POST[message]).'<br>';

require"conn.php";
$result=mysql_query("insert into feedback values('','$_POST[uname]','$_POST[phone]','$_POST[email]','$_POST[subject]','$_POST[message]')");

if($result)
echo 'Massage send';
	else echo'Eror to send massage';
?>

<form name="goto" action="index.php">
<input type="submit" value="go to main page"></form>
</form>
</body>
</html>