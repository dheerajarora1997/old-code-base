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
<title>family price</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello Admin,<br>&nbsp;
<br>
<br>
</p>
<form name="registration" enctype="multipart/form-data" method="post" action="update20.php">
FAMILY ROOM off price<br />
<input type="text" name="foffprice" value="<?php echo $indexpage->foffprice ?>" />
<br />
FAMILY ROOM regular price<br />
<input type="text" name="fregularprice" value="<?php echo $indexpage->fregularprice ?>" />
<br />
FAMILY ROOM peak price<br />
<input type="text" name="fpeakprice" value="<?php echo $indexpage->fpeakprice ?>" />
<br />
<br />
<input type="submit" name="upload" class="but" value="upload" />
</form>
</div>

</body>
</html>