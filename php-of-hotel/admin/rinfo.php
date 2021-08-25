<?php
session_start();
 if(empty(@($_SESSION[sname])))
  header('location:index.php');

require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css" type="text/css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="ty" align="center">
<p align="left">
&nbsp;Hello admin,<br />
change your address. here
<br>
<br />
</p>
<form name="registration" method="post" action="update23.php">
<textarea cols="35" class="but" name="rinfo" rows="8"><?php echo"$indexpage->rinfo" ?></textarea>
<br />
Change phone no here
<br />
<br />
<textarea cols="38" class="but" name="rinfo1" rows="9"><?php echo"$indexpage->rinfo1" ?></textarea>
<br />
<br />

<input class="but" type="submit" name="submit" value="update" /> 
</form>
</div>
</body>
</html>