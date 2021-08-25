<?php
$roomtype=@($_GET[uname]);
require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="validation1.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::STANDERD DOUBLE ROOMS::</title>
<link rel="shortcut icon" href="admin/images//fev.png" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="validation.js"></script>

</head>

<body>
<div class="container">
<div class="header">
<a href="index.php"><div class="logo"></div></a><div class="menu">
	<ul type="none">
    	<a href="index.php"><li>HOME</li></a>
        <a href="services.php"><li>SERVICES</li></a>
        <a href="accomodation.php"><li>ACCOMODATION</li></a>
        <a href="conference.php"><li>CONFERENCE</li></a>
      <a href="contactus.php"><li>CONTACT US.</li></a></ul>
</div>
</div>
<div class="slider"></div>
<div class="backgrounddd">

<div class="roomtype"><b>STANDERD DOUBLE ROOM</b></div>
<div class="roomimg"><img class="bor" width="540px" height="200px" src="admin/images/<?php echo $indexpage->sdrimg ?>" /></div>
<div class="fac">
	<li type="none"><b>A.C. Rooms</b></li>
	<li type="none"><b>Hair Dryer</b></li>
    <li type="none"><b>Ironed Cloths</b></li>
    <li type="none"><b>Setlite Chanals</b></li>
    <li type="none"><b>Free WiFi</b></li>
    <li type="none"><b>Bed Tea</b></li>
<img src="admin/images/<?php echo $indexpage->fac1 ?>" width="20px" height="15px" />
<img src="admin/images/<?php echo $indexpage->fac2 ?>" width="20px" height="15px" />
<img src="admin/images/<?php echo $indexpage->fac3 ?>" width="20px" height="15px" />
<img src="admin/images/<?php echo $indexpage->fac4 ?>" width="20px" height="15px" />
<img src="admin/images/<?php echo $indexpage->fac5 ?>" width="20px" height="15px" />
<img src="admin/images/<?php echo $indexpage->fac6 ?>" width="20px" height="15px" /></div>

<form name="date"  method="post" onSubmit="return validationdate();" action="book.php">
<input type="hidden" value=" <?php echo $roomtype; ?>" name="roomtype" >
<div class="book"> Arrival Date <input style="background-color:#bbbbbb" name="adate" class="bor1" type="date">
 Departure Date <input style="background-color:#bbbbbb" class="bor1" type="date" name="ddate">
  <input type="submit" style="background-color:#cf822f"  class="bor1" name="book" value="BOOK" ></div>

</form>
<div class="images">
<h2>REVIEWS</h2>
<div class="leftside">
<div class="leftfield">
<img src="admin/images/<?php echo $indexpage->p1r ?>" align="left" width="80px" height="80px;" />
<div class="reviews"><strong><?php echo $indexpage->rn1  ?></strong><br>
<?php echo $indexpage->r1 ?>
</div></div>

<div class="leftfield">
<img src="admin/images/<?php echo $indexpage->p2r ?>" align="left" width="80px" height="80px;" />
<div class="reviews"><strong><?php echo $indexpage->rn2 ?></strong><br>
<?php echo $indexpage->r2 ?></div></div>

<div class="leftfield">
<img src="admin/images/<?php echo $indexpage->p3r ?>" align="left" width="70px" height="80px;" />
<div class="reviews"><strong><?php echo $indexpage->rn3 ?></strong><br>
<?php echo $indexpage->r3 ?>
</div></div>

</div>
<div class="rightside">

<div class="leftfield">
<img src="admin/images/<?php echo $indexpage->p4r ?>" align="left" width="70px" height="90px;" />
<div class="reviews"><strong><?php echo $indexpage->rn4?></strong><br>
<?php echo $indexpage->r4 ?>
</div></div>

<div class="leftfield">
<img src="admin/images/<?php echo $indexpage->p5r ?>" align="left" width="80px" height="80px;" />
<div class="reviews"><strong><?php echo $indexpage->rn5 ?></strong><br>
<?php echo $indexpage->r5 ?>
 </div></div>
 

<div class="leftfield">
<img src="admin/images/<?php echo $indexpage->p6r ?>" align="left" width="80px" height="80px;" />
<div class="reviews"><strong><?php echo $indexpage->rn6 ?></strong><br>
<?php echo $indexpage->r6 ?></div>
</div></div>
</div>

</div>
<div class="pic"><img src="admin/images/<?php echo $indexpage->pic ?>" /></div>
<div class="yw"><div class="fnt"><b><?php echo $indexpage->fnt ?></b></div>
<div class="fntt"><?php echo $indexpage->fntt ?> </div> </div>
<div class="topfooter">


<div class="about">
<div class="txt"><?php echo $indexpage->txt ?>
<div class="txt1"><?php echo $indexpage->txt1 ?></div>
</div>
</div>

<div class="about">
<div class="txt"><?php echo $indexpage->txt2 ?>
<div class="txt1"><?php echo $indexpage->txt3 ?></div>
</div>
</div>
<div class="join">
<div class="txt4"><b><?php echo $indexpage->txt4 ?> </b></div>
<div class="txt1"><?php echo $indexpage->txt5 ?>
</div>
</div>
<div class="mamber">
<div class="loginn" >
<a href="loginnnn.php"><input type="button" value="login" class="but0"></a>
</div>
<div class="loginn" >
<a href="admin/index.php"><input type="button"  value="Admin login" class="but"></a>
</div>
<!--

<form name="myform1" action="bill.php" onSubmit="return validation1()" method="post">
<div class="input1">username<br /><input name="username" title="username" class="bor" type="text"  size="8" />
</div>
<div class="input1">password<br /><input title="password" name="Password" class="bor" type="password" size="8" /></div>
<div class="input1"><input class="bor1" name="login" type="submit" style="background-color:#cf822f" 
value=":Log in:"/>
</div>
</form>
-->
</div>
</div>
<div class="copyrightt"><a href="adminpage.php"><?php echo $indexpage->copyrightt ?></a></div>
</div>
</body>
</html>
