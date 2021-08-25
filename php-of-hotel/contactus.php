<?php
require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>::Contact Us::</title>
<link rel="shortcut icon" href="admin/images/<?php echo $indexpage->fev ?>" />
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
<div class="backgrounddd">
<div class="service"><b><?php echo $indexpage->contactus ?></b></div>
<div class="inf"><?php echo $indexpage->inf ?></div>

<div class="leftside">


<div class="field"><?php echo $indexpage->leftname ?></div>
<form name="myform" action="act.php" enctype="multipart/form-data" onsubmit="return validation();" method="post" >
<div class="field"><input  type="text" name="uname" title="Your Name"  size="28" class="bor" 
style="background-color:#bbbbbb"/></div>
<div class="field"><?php echo $indexpage->leftphone ?></div>
<div class="field"><input type="text" maxlength="10" title="Your Phone no." name="phone"  size="28" class="bor" style="background-color:#bbbbbb"/></div>
<div class="field"><?php echo $indexpage->leftidd  ?></div>
<div class="field"><input type="email" name="email" title="Your Email id" size="28" class="bor" style="background-color:#bbbbbb" /></div>
<div class="field"><?php echo $indexpage->leftsubject  ?></div>
<div class="field"><input title="Subject" class="bor" name="subject" type="text"  size="28"  style="background-color:#bbbbbb" /></div>
<div class="field"><?php echo $indexpage->leftmessage ?></div>
<div class="field"><label><textarea placeholder=" Enter Your Message Here" title="Your Message" name="message" class="bor" style="background-color:#bbbbbb"  cols="40" rows="9" ></textarea></label></div>
<div class="field"><input type="submit" name="submit" height="15px" value=" :Send: " class="bor1" 
style="background-color:#cf822f"   /></div>
</form>
</div>
<div class="rightside">
<div class="rightinfo"><b>Contact Info:</b></div>
<div class="rightinfo">Address.</div>
<div class="rightinfo1"><img src="admin/images/<?php echo $indexpage->homepic ?>" width="25px" height="20px" />
<?php echo $indexpage->rinfo ?>
<div class="rightinfo"><b>Phone:</b></div>
<div class="rightinfo1"><img src="admin/images/<?php echo $indexpage->phonepic ?>" width="25px" height="20px" />
<?php echo $indexpage->rinfo1 ?></div>
<div class="rightinfo"><b>Email:</b></div>
<div class="emailid"><?php echo $indexpage->remail ?></div>
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
<img src="admin/images/tumber.png" width="15px" height="15px"></a>
</div>
</div>
</div>
</div>
<div class="copyrightt"><a href="adminpage.php"><?php echo $indexpage->copyrightt ?></a></div>
</div>
</body>
</html>
