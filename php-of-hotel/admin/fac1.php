<?php
session_start();
 if(empty(@($_SESSION[sname])))
  header('location:index.php');

require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>
<!doctype html>
<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello admin,
chose another image to replace

<br>

</p>
<form name="registration" method="post" action="update.php">
<div class="roomimg"><img class="bor" src="images/<?php echo $indexpage->sdrimg ?>" />
<br />
<br />
<input type="file" name="sdrimg" value="sdrimg" />
<input type="submit" name="submit" value="update" /> 
</form>

</body>
</html>