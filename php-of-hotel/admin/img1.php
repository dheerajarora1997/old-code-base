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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>change img1</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="ty" align="center">
<p align="left">
Hello admin,
chose another image to replace

<br>

</p>
<form name="registration" method="post" enctype="multipart/form-data" action="update.php">
<img width="159px" height="136px" src="images/<?php echo $indexpage->img1 ?>" />
<br />
<br />
<input type="file" value="img1" name="img1" class="but" />
<input type="submit" name="submit" value="update" class="but" /> 
</form>
</div>

</body>
</html>