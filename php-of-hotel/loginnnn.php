<?php
if(@($_POST[login]))
{

	require "conn.php";
	$r=mysql_query("select * from custmer where email='$_POST[uname]' and password='$_POST[upass]'");
	$count=mysql_num_rows($r);
	if($count)
	{
		session_start();
		$_SESSION['sname']=$_POST[uname];
		//echo $_SESSION[sname];
		header('location:bill.php');
	}
	else
	 $msg='Invalid user name or password!';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<link rel="shortcut icon" href="admin/imagesfac/fev.png" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bill">
<div class="header"><strong><a href="index.php"><div class="leftheader">HOTEL &nbsp;</div><div class="leftheader1"> DELUXE</div></a></strong>
<div class="lowtext">Campal Beach Resort,<br>Panjam, Goa, India-403001</div>
<h1>Thanks for choosing our HOTEL we would happy to help you for 24 X 7.
Here is your log in form for chacking your current bill and your services.
</h1>
<br>
<br>
<div class="splay">
<marquee scrolldelay="-5" onMouseOver="stop();" onMouseOut="start();" direction="left"><br>
<img src="admin/images/standerd double r.png">
<img src="admin/images/standerd single r.png">
<img src="admin/images/family r.png">
<img src="admin/images/supperior double r.png">
<img src="admin/images/supperior single r.png">
<img src="admin/images/vip r.png">
</marquee>
<br>
<marquee  onMouseOver="stop();" onMouseOut="start();" direction="right" ><br>
<img src="admin/images/standerd double r.png">
<img src="admin/images/standerd single r.png">
<img src="admin/images/family r.png">
<img src="admin/images/supperior double r.png">
<img src="admin/images/supperior single r.png">
<img src="admin/images/vip r.png">
</marquee>
</div>
<div class="fill">
<strong>Here is your login form
</strong><form name="customlogin" method="post" action="#">
<br>
Email <input name="uname" size="15" class="but" type="text">
<br>
<br>
Password <input name="upass" size="10" class="but" type="password">
<br>
<br>
<font color="red"><?php echo @($msg);?></font>
<input style="margin:20px 120px" value="login" name="login" type="submit" class="but">
</form>

</div>
</div>

<div style="margin-top:48px;" class="copyrightt">ALL RIGHTS &reg; HOTELDELUXE</div>

</body>
</html>