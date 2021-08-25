<?php
$adate=@($_POST[adate]);
$ddate=@($_POST[ddate]);
echo $roomtype=@($_GET[uname]);
require"conn.php";
$result=mysql_query("select * from custmer");
$indexpage=mysql_fetch_object($result);
?>

<!DOCTYPE html>
<head>
<script language="javascript" type="text/javascript" src="validation1.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Book::</title>
<link rel="shortcut icon" href="admin/imagesfac/fev.png" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bill">
<div class="header"><strong><a href="index.php"><div class="leftheader">HOTEL &nbsp;</div><div class="leftheader1"> DELUXE</div></a></strong>
<div class="lowtext">Campal Beach Resort,<br> D. Bandokar Marg,<br>Opp,swimingpool,
<br>Near Indoor Stadium,Campal<br>Panjam, Goa, India-403001</div>
<div class="rightheader"><div class="service">Fill This Form TO Book Your Room.</div></div>
</div>

<div class="tab">
<center>
<form name="book" onSubmit="return validation1();" action="bookact.php" enctype="multipart/form-data" method="post" >
<table align="left" width="450px" cellpadding="0" height="499" cellspacing="0" background="admin/images/up.png"  class="tabbor">
  
  <tr>
  <td>First Name&nbsp;</td><td>
  <input name="name" type="text" style="background-color:#bbbbbb" class="bor" size="16"></td></tr>
  
  <tr>
  <td>Last Name&nbsp;</td>
  <td><input type="text" name="lastname" class="bor" style="background-color:#bbbbbb" size="16"></td></tr>

<tr>
<td>Select Room Type</td><td><!--<select name="roomtype" style="background-color:#bbbbbb" class="bor">
<option value="">:Room Type:</option>
<option value="Standerd Double Room">Standerd Double Room</option>
<option value="Standerd Single Room">Standerd Single Room</option>
<option value="Supperior Double Room">Supperior Double Room</option>
<option value="Supperior Single Room">Supperior Single Room</option>
<option value="vip room">VIP Room</option>
<option value="Family room">Family Room</option>
</select>-->
<input type="text" value="<?php echo @($_POST[roomtype]); ?>"
 class="bor" style="background-color:#bbbbbb" size="16"  name="roomtype"  readonly >
</td>
</tr>

<tr>
  <td>Contact no.</td>
  <td><input type="tel" name="phone_no" class="bor" style="background-color:#bbbbbb" size="16"></td></tr>
<tr>
  <td>Email ID</td>
  <td><input type="email" name="email" class="bor" style="background-color:#bbbbbb" size="16"></td></tr>
 
 <tr>
  <td>Start Date&nbsp;</td>
  <td><input type="date" size="16" name="startdate" class="bor" style="background-color:#bbbbbb" value="<?php echo @($adate); ?>" readonly></td></tr>

<tr>
  <td>End Date&nbsp;</td>
  <td><input size="16" type="date" name="enddate" class="bor" value="<?php echo @($ddate); ?>" readonly style="background-color:#bbbbbb" /></td></tr>
  <tr><td colspan="2">Your Security Code</td></tr>
  <tr><td colspan="2">
  <input style="background-color:#bbbbbb" name="password" type="password" size="30"></td></tr>
<tr>
<td></td>
	<td><input style="background-color:#cf822f" class="bor" type="submit" name="Pay" 
    value=" Book & Pay At Room "  ></td>
  </tr>
  
  </table>
  </form>
  
  </div>
 
<div class="copyrightt">All Rights &reg; HotelDelux.in</div>
</div>
</body>
</html>
