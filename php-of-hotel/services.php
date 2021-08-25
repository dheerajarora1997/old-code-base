<?php
require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>

<!DOCTYPE>
<html><head>
<title>::Services::</title>
<link rel="shortcut icon" href="admin/images<?php echo $indexpage->fev ?>" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="validation.js"></script>
</head>

<body>
<div class="container1">
<div class="share">&nbsp;&nbsp;
<ol id="share"><li>Facebook</li></ol>
</div>
<div class="share1">&nbsp;&nbsp; 
<ol id="share"><li>Twitter</li></ol>
</div>
<div class="share2">&nbsp;&nbsp; 
<ol id="share"><li>Google +</li></ol>
</div>
<div class="share3">&nbsp;&nbsp; 
<ol id="share"><li>Linked in</li></ol>
</div>
<div class="share4">&nbsp;&nbsp; 
<ol id="share"><li>Pinterest</li></ol>
</div>
<div class="share5">&nbsp;&nbsp; 
<ol id="share"><li>Tumbler</li></ol>
</div>

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
<div class="backgroundd">
<div class="service"><?php echo $indexpage->service ?> </div>
<div class="leftside">
<div class="faculity"><?php echo $indexpage->faculity ?>
						<?php echo $indexpage->faculity1 ?>
                         <?php echo $indexpage->faculity2 ?>
</div></div>
<div class="rightside">
<div class="faculity">
<?php echo $indexpage->rfaculity ?>
<?php echo $indexpage->rfaculity1 ?>

</div>
</div>
</div>

<div class="pic1"><img src="admin/images/<?php echo $indexpage->pic ?>" /></div>
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
<a href="login.php"><input type="button" value="login" class="but0"></a>
</div>
<div class="loginn" >
<a href="admin/index.php"><input type="button"  value="Admin login" class="but"></a>
</div>
<div class="sociall">
<!--social links-->
<div class="social">
<a href="www.fb.com/hoteldeluxe99"><img src="admin/images/fb.png" width="15px" height="15px"></a>
</div>
<div class="social">
<a href="www.twitter.com/hoteldeluxe"><img src="admin/images/tweet.png" width="15px" height="15px"></a>
</div>
<div class="social">
<a href="www.googleplus.com/hoteldeluxe99"><img src="admin/images/google+.png" width="15px" height="15px"></a>
</div>
<div class="social">
<a href="www.linkedin.com/hoteldeluxe99"><img src="admin/images/linked.png" width="15px" height="15px"></a>
</div>
<div class="social">
<a href="www.pinterest.com/hoteldeluxe99">
<img src="admin/images/Pinterest.png" width="15px" height="15px"></a>
</div>
<div class="social">
<a href="www.tumber.com/hoteldeluxe99">
<img src="admin/images/tumber.png" width="15px" height="15px"></a></div>
</div>
</div>
</div>
<div class="copyrightt"><a href="adminpage.php"><?php echo $indexpage->copyrightt ?></a></div>
</div>
</body>
</html>
