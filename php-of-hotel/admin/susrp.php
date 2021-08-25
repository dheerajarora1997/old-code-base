<?php
session_start();
 if(empty(@($_SESSION[sname])))
  header('location:index.php');
require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STANDERD SINGLE ROOM price</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello Admin,<br>&nbsp;
<br>
<br>
</p>
<form name="registration" enctype="multipart/form-data" method="post" action="update22.php">
STANDERD SINGLE ROOM off price<br />
<input type="text" name="susroffprice" value="<?php echo $indexpage->susroffprice ?>" />
<br />
STANDERD SINGLE ROOM regular price<br />
<input type="text" name="susrregularprice" value="<?php echo $indexpage->susrregularprice ?>" />
<br />
STANDERD SINGLE ROOM peak price<br />
<input type="text" name="susrpeakprice" value="<?php echo $indexpage->susrpeakprice ?>" />
<br />
<br />
<input type="submit" name="upload" class="but" value="upload" />
</form>
</div>

</body>
</html>