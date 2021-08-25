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
<title>change photo</title>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello admin,
chose another image to replace

<br>

</p>
<form name="registration" method="post" action="update25.php" enctype="multipart/form-data">
<img width="159px" height="136px" class="but" src="images/<?php echo $indexpage->phonepic ?>" />
<br />
<br />
<input type="file" value="phonepic" name="phonepic" class="but" />
<input type="submit" name="submit" class="but" value="update" /> 
</form>
</div>

</body>
</html>