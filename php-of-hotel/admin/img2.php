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
<form enctype="multipart/form-data" name="registration" method="post" action="update2.php">
<img width="159px" height="136px" src="images/<?php echo $indexpage->img2 ?>" />
<br />
<br />
<input class="but" type="file" name="img2" value="img2" />
<input type="submit" class="but" name="submit" value="update" /> 
</form>
</div>

</body>
</html>