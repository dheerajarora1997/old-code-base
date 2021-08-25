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
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit email address</title>
</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello Admin,<br>
change your email address
<br>
<br>
<form name="registration" method="post" enctype="multipart/form-data" action="update26.php">
<input type="email" size="40" class="but" name="remail" value="<?php echo $indexpage->remail ?>" />

</p>
<input type="submit" name="upload" class="but" value="upload" />
</form>
</div>
</body>
</html>