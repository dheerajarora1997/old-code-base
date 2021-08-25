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
<title>by admin</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="ty" align="center">
<p align="left">
Hello admin,
chose another image to replace
<br>
</p>
<form enctype="multipart/form-data" name="registration" method="post" action="update16.php">
<span class="roomimg"><img width="250px" max-height="300px" class="bor" src="images/<?php echo $indexpage->pic ?>" />
<br />
<br />
<input class="but" type="file" name="pic" value="pic" />
<input type="submit" class="but" name="submit" value="update" /> 
</span>
</form>
</div>
</body>
</html>