<?php

require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Accomodation::</title>
<link rel="shortcut icon" href="admin/images/<?php echo $indexpage->fev ?>" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="validation.js"></script>
</head>

<body>
<div class="container1">
<div class="header">
<a href="hindex.php"><div class="logo"></div></a><div class="menu">
	<ul type="none">
    	<a href="hindex.php"><li>HOME</li></a>
        <a href="accomodation.php"><li class="line">ACCOMODATION</li></a>
      <a href="contactus.php"><li>CONTACT US.</li></a></ul>
</div>
</div>
<div class="slider"></div>
<div class="backgroundd">

<table border="3px" width="1000px" min-height="350px" bordercolor="#2a2e33">
<tr>
<td width="250px" height="50px"><b><?php echo $indexpage->tarrif ?></b></td>
<td width="250px" height="50px"><b><?php echo $indexpage->offseason ?></td>
<td width="250px" height="50px"><b><?php echo $indexpage->reqularseason ?></td>
<td width="250px" height="50px"><b><?php echo $indexpage->peakseason ?></td>
</tr>

<tr>
<td width="250px" height="50px">
<a style="color:black" href="sdrp.php"><b><?php echo $indexpage->standerddoubleroom ?></b></a></td>
<td width="250px" height="50px"><?php echo $indexpage->sdroffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->sdrreqularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->sdrpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><a style="color:black" href="sudrp.php"><b><?php echo $indexpage->supperiordoubleroom ?></b></a></td>
<td width="250px" height="50px"><?php echo $indexpage->sudroffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->sudrregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->sudrpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><a style="color:black" href="vipp.php">
<b><?php echo $indexpage->viproom ?></b></a></td>
<td width="250px" height="50px"><?php echo $indexpage->voffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->vregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->vpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><a style="color:black" href="ssrp.php">
<b><?php echo $indexpage->standerdsingleroom ?></b></a></td>
<td width="250px" height="50px"><?php echo $indexpage->ssroffprice ?> </td>
<td width="250px" height="50px"><?php echo $indexpage->ssrregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->ssrpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><a style="color:black" href="susrp.php">
<b> <?php echo $indexpage->suppreroiosingleroom ?> </b></a></td>
<td width="250px" height="50px"><?php echo $indexpage->susroffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->susrregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->susrpeakprice ?></td>
</tr>

<tr>
<td width="250px" height="50px"><a style="color:black" href="familyp.php">
<b><?php echo $indexpage->familyroom ?></b></a></td>
<td width="250px" height="50px"><?php echo $indexpage->foffprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->fregularprice ?></td>
<td width="250px" height="50px"><?php echo $indexpage->fpeakprice ?></td>
</tr>



</table>


</div>

<a href="pic.php"><div class="pic1"><img src="images/<?php echo $indexpage->pic ?>" /></div></a>
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
<div class="out">&nbsp; &nbsp;


  <a href="destroy.php">
  <button class="but">Signout</button>
  
  </a>
  
   <a href="changepass.php">
  <button class="but">change password</button>
  
  </a>
<br>
<br>

  <a href="upload.php">
  <button style="margin-left:55px" class="but">Upload Image</button>
  
  </a>

  
  </div>
  </form>
</div>
</div>
<div class="copyrightt"><a href="adminpage.php"><?php echo $indexpage->copyrightt ?></a></div>
</div>
</body>
</html>