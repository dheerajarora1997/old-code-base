<?php
require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Accomodation::</title>
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
        <a href="accomodation.php"><li class="line">ACCOMODATION</li></a>
        <a href="conference.php"><li>CONFERENCE</li></a>
      <a href="contactus.php"><li>CONTACT US.</li></a></ul>
</div>
</div>
<div class="slider"></div>
<div class="backgroundd">

<table background="admin/images/up.png" border="3px" width="1000px" min-height="350px" bordercolor="#2a2e33">
<tr>
<td width="250px" height="50px"><b><?php echo $indexpage->tarrif ?></b></td>
<td width="250px" height="50px"><b><?php echo $indexpage->offseason ?></td>
<td width="250px" height="50px"><b><?php echo $indexpage->reqularseason ?></td>
<td width="250px" height="50px"><b><?php echo $indexpage->peakseason ?></td>
</tr>

<tr>
<td width="250px" height="50px"><b><?php echo $indexpage->standerddoubleroom ?></b></td>
<td width="250px" height="50px"><?php echo $indexpage->sdroffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->sdrreqularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->sdrpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><b><?php echo $indexpage->supperiordoubleroom ?></b></td>
<td width="250px" height="50px"><?php echo $indexpage->sudroffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->sudrregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->sudrpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><b><?php echo $indexpage->viproom ?></b></td>
<td width="250px" height="50px"><?php echo $indexpage->voffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->vregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->vpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><b><?php echo $indexpage->standerdsingleroom ?></b></td>
<td width="250px" height="50px"><?php echo $indexpage->ssroffprice ?> </td>
<td width="250px" height="50px"><?php echo $indexpage->ssrregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->ssrpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"> <b> <?php echo $indexpage->suppreroiosingleroom ?> </b></td>
<td width="250px" height="50px"><?php echo $indexpage->susroffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->susrregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->susrpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><b><?php echo $indexpage->familyroom ?></b></td>
<td width="250px" height="50px"><?php echo $indexpage->foffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->fregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->fpeakprice ?></td>
</tr>



</table>


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
<a href="loginnnn.php"><input type="button" onclick="admin/login.php" value="login" class="but0"></a>
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
<img src="admin/images/tumber.png" width="15px" height="15px"></a></div></div>
</div>
</div>
<div class="copyrightt"><a href="adminpage.php"><?php echo $indexpage->copyrightt ?></a></div>
</div>
</body>
</html>
