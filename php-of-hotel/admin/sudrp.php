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
<title>supperior double room price</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello Admin,<br>&nbsp;
<br>
<br>
</p>
<form name="registration" enctype="multipart/form-data" method="post" action="update18.php">
SUPPERIOR DOUBLE ROOM off price<br />
<input type="text" name="sudroffprice" value="<?php echo $indexpage->sudroffprice ?>" />
<br />
SUPPERIOR DOUBLE ROOM regular price<br />
<input type="text" name="sudrregularprice" value="<?php echo $indexpage->sudrregularprice ?>" />
<br />
SUPPERIOR DOUBLE ROOM peak price<br />
<input type="text" name="sudrpeakprice" value="<?php echo $indexpage->sudrpeakprice ?>" />
<br />
<br />
<input type="submit" name="upload" class="but" value="upload" />
</form>
</div>

</body>
</html>