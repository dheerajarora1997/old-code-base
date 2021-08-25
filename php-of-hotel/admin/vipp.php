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
<title>VIP room price</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello Admin,<br>&nbsp;
<br>
<br>
</p>
<form name="registration" enctype="multipart/form-data" method="post" action="update19.php">
VIP ROOM off price<br />
<input type="text" name="voffprice" value="<?php echo $indexpage->voffprice ?>" />
<br />
VIP ROOM regular price<br />
<input type="text" name="vregularprice" value="<?php echo $indexpage->vregularprice ?>" />
<br />
VIP ROOM peak price<br />
<input type="text" name="vpeakprice" value="<?php echo $indexpage->vpeakprice ?>" />
<br />
<br />
<input type="submit" name="upload" class="but" value="upload" />
</form>
</div>

</body>
</html>