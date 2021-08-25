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
chose another image to replace

<br>

</p>
<form enctype="multipart/form-data" name="registration" method="post" action="update13.php">
<div class="roomimg"><img class="bor" width="300px" src="images/<?php echo $indexpage->surimg ?>" />
<br />
<br />
<input class="but" type="file" name="surimg" value="surimg" />
<input type="submit" class="but" name="submit" value="update" /> 
</form>
</div>
</body>
</html>