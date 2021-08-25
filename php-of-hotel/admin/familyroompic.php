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

<body id="back">
<div class="ty" align="center">
<p align="left">
Hello admin,
chose another room name to replace

<br>

</p>
<form enctype="multipart/form-data" name="registration" method="post" action="update15.php">
<div class="roomimg"><img width="300px" src="images/<?php echo $indexpage->fimg  ?>"></div>
<br />
<br />
<input type="file" name="fimg" value="fimg" class="but">
<input type="submit" name="submit" value="update" class="but" /> 
</div>
</form>
</div>
</body>
</html>