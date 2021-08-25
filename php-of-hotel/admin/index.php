
<?php

if(@($_POST[login]))
{

	require "conn.php";
	$r=mysql_query("select * from admin where email_id='$_POST[email]' and     password='$_POST[password]'");
	$count=mysql_num_rows($r);
	if($count)
	{
		session_start();
		$_SESSION['sname']=$_POST[email];
		header('location:afterlogin.php');
	}
	else
	 $msg='Invalid user name or password!';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session login page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body background="images/templatemo-slide-3.png" style="background-repeat:no-repeat;">
<div class="logoo">HOTEL <font color="#cf820f"> DELUXE</font>
<div class="subtitle">Your text here Your text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text here</div>
</div>
<div class="ty">
<h2 align="center">Admin Login Form</h2>
<form name="loginn" method="post" action="#">
<table cellpadding="0" cellspacing="2" align="center"  border="0">
<tr>
<td width="200" align="center" height="25">Email-Id</td>
<td width="200" align="center" height="25">
<input style="background-image:url(images/e.png)" type="email" name="email" class="but"/></td>
</tr>
<tr>
<td width="200" align="center" height="25">Password</td>
<td width="200" align="center" height="25">
<input style="background-image:url(images/password.png)" type="password" name="password"
 class="but"/></td>
</tr>
<tr>
<td colspan="2" align="center" style="color:#F00"><?php echo @($msg);?>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="login" value="Login" class="but" /> </td>
</tr>
</table>
</form>
</div>
</body>
</html>