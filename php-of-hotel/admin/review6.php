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
<title>edit review</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="ty" align="center">
<p align="left">
Hello Admin,<br>&nbsp;
Edit sixth Review
<br>
<br>
</p>
<form name="registration" method="post" action="update10.php" enctype="multipart/form-data">

<img width="200px" class="but" height="200px" src="images/<?php echo $indexpage->p6r ?>" />
<br />
<input type="file" class="but" name="pick6"/>
<br />
<br />
<input type="text" name="rn6" value="<?php echo $indexpage->rn6 ?>"  />
<br />
<br />
<textarea cols="38" name="r6" rows="5" ><?php echo $indexpage->r6 ?></textarea>
<br />
<br />
<input type="submit" name="upload" class="but" value="upload" />
</form>
</div>

</body>
</html>