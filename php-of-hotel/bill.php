<?php
session_start();
require "conn.php";
$result=mysql_query("select * from custmer where email='$_SESSION[sname]'");
$indexpa=mysql_fetch_object($result);
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="shortcut icon" href="admin/imagesfac/fev.png" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bill">
<div class="header"><strong><a href="index.php"><div class="leftheader">HOTEL &nbsp;</div><div class="leftheader1"> DELUXE</div></a></strong>
<div class="lowtext">Campal Beach Resort,<br>Panjam, Goa, India-403001</div>
<div class="rightheader">CURRENT BILL</div>
</div>
<br>
<table background="admin/images/up.png"  cellpadding="0" cellspacing="0"  class="tabbor" width="1000px" height="100">
<tr>
<td>Name:<?php echo $indexpa->name;?> <?php echo $indexpa->lastname  ?> </td>
<td>Phone no:<?php echo $indexpa->phone_no; ?> </td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>
Room Type:<?php echo $indexpa->roomtype; ?></td>
<td>Email :<?php echo $indexpa->email; ?>
</td>
</tr>
</table>

<div class="rightheader">
BILL INFORMATION</div>
<table background="admin/images/up.png" cellpadding="0" cellspacing="0" border="1" bordercolor="black" width="1000px" height="600">
<tr>
<td width="150">S NO.</td>
<td width="700">SERVICES</td>
<td width="150">PRICE</td>
</tr>

<tr>
<td width="150">1</td>
<td width="700">xxxxxx</td>
<td width="150">xxxx</td>
</tr>

<tr>
<td width="150">2</td>
<td width="700">xxxxxx</td>
<td width="150">xxxx</td>
</tr>

<tr>
<td width="150">3</td>
<td width="700">xxxxxx</td>
<td width="150">xxxx</td>
</tr>

<tr>
<td width="150">4</td>
<td width="700">xxxxxx</td>
<td width="150">xxxx</td>
</tr>

<tr>
<td width="150">5</td>
<td width="700">xxxxxx</td>
<td width="150">xxxx</td>
</tr>

<tr>
<td width="850" colspan="2"><strong>TOTAL</strong></td>
<td width="150">xxxx</td>
</tr>
</table>

<br>
<div class="copyrightt">ALL RIGHTS &reg; HOTELDELUXE</div>
</body>
</html>
