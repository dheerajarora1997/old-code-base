<?php
session_start();
if (@($_POST[change]))
{
	require"conn.php";
	$r=mysql_query("select * from admin where password='$_POST[cp]'");
	$count=mysql_num_rows($r);
	if ($count)
	{
		if (@($_POST[np])!='' && @($_POST[conp])!='')
		{if (@($_POST[np])==@($_POST[conp]))
		{$result=mysql_query("update  admin set Password='$_POST[np]' where Email_Id='$_SESSION[sname]'");
	
	if ($result) 
	header("location:index.php");
	else
	$msg="Error to Change Password";
	}
	else
		$msg="New Password & Confirm Password does not  match";
		}
	else
		$msg="New Password & Confirm Password is empty";
	}
	else
		$msg="Invalid Current Password";
}
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<body id="back">
<div class="ty">
<h2 align="center">Change Password</h2>
<form id="form1" name="form1" method="post"
 action="">
 <table align="center" cellpadding="0" cellspacing="2" border="1">
 <tr>
 <td width="200" align="center" height="30">Currunt Password</td>
 <td width="200" align="center" height="30"><input type="password" name="cp" class="in"/></td>
 </tr>
 <tr>
 <td width="200" align="center" height="30">New Password</td>
 <td width="200" align="center" height="30"><input type="password" name="np" class="in"/></td>
 </tr>
 <tr>
 <td width="200" align="center" height="30">Confirm Password</td>
 <td width="200" align="center" height="30"><input type="password" name="conp" class="in"/></td>
 </tr>
 <tr>
<td colspan="2" align="center" style="color:#F00"><?php echo @($msg);?></td>
</tr>
 <tr>
 <td colspan="2" align="center"  width="200" height="40"><input type="submit" name="change" value="Change Password" style="background-color:#FF8000; color:#FFF; padding:8px; border-radius:6px"/></td>
 </tr>
 </table>
 </form>

 </body>
 </div>
