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
<title>edit review</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello Admin,<br>&nbsp;
Edit First Review
<br>
<br>
</p>
<form name="registration" method="post" action="update5.php" enctype="multipart/form-data">

<img width="200px" class="but" height="200px" src="images/<?php echo $indexpage->p1r ?>" />
<br />
<input type="file" class="but" name="pick"  />
<br />
<br />
<input type="text" name="rn1" value="<?php echo $indexpage->rn1 ?>"  />
<br />
<br />
<textarea cols="38" name="r1" rows="5" ><?php echo $indexpage->r1 ?></textarea>
<br />
<br />
<input type="submit" name="upload" class="but" value="upload" />
</form>
</div>
</body>
</html>