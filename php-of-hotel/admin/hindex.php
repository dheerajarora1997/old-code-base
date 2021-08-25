<?php
session_start();
 if(empty(@($_SESSION[sname])))
  header('location:index.php');
require"conn.php";
$result=mysql_query("select * from indexpage");
$indexpage=mysql_fetch_object($result);
?>
<!DOCTYPE html>
<head>
<title>by admin</title>
<link rel="shortcut icon" href="images/<?php echo $indexpage->fev ?>" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="container">
<div class="header">
<a href="hindex.php"><div class="logo"></div></a><div class="menu">
	<ul type="none">
    	<a href="hindex.php"><li>HOME</li></a>
        <a href="accomodation.php"><li>ACCOMODATION</li></a>
      <a href="contactus.php"><li>CONTACT US.</li></a></ul>
</div>
</div>
<div class="slider"></div>
<div class="content"><b><?php echo $indexpage->content ?></b>
	<div class="con"><?php echo $indexpage->con ?></div>
    <br />
    <img width="60px" height="136px" src="images/<?php echo $indexpage->arrowl ?>" />
    <a href="img1.php"><img width="159px" height="136px" src="images/<?php echo $indexpage->img1 ?>" /></a>
    <a href="img2.php"><img width="159px" height="136px" src="images/<?php echo $indexpage->img2 ?>" /></a>
    <a href="img3.php"><img width="159px" height="136px" src="images/<?php echo $indexpage->img3 ?>" /></a>
    <img width="60px" height="136px" src="images/<?php echo $indexpage->arrowr ?>" />
    
    </div>

<div class="backgroundd">
<div class="detail"><?php echo $indexpage->detail  ?></div>
<div class="room"><a href="standerdrooms.php">
<img class="bor" src="images/<?php echo $indexpage->sdrimg ?>" width="271px" height="92px" alt="standerd double room" /></a>
<b><?php echo $indexpage->roomtype1 ?></b>
<div class="roominfo"><?php echo $indexpage->roominfo ?></div>			
						<div class="img0">
                        		<img src="images/<?php echo $indexpage->fac1 ?>" width="20px" height="15px" />
								<img src="images/<?php echo $indexpage->fac2 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac3 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac4 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac5 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac6 ?>" width="20px" height="15px" />
                                </div>
</div>
<div class="room"><a href="supperiorrooms.php">
<img class="bor" src="images/<?php echo $indexpage->sudrimg ?>" width="271px" height="92px" alt="supperior double room" /></a>
<b><?php echo $indexpage->roomtype2 ?></b><div class="roominfo"><?php echo $indexpage->roominfo ?></div> 								<div class="img0">
<img src="images/<?php echo $indexpage->fac1 ?>" width="20px" height="15px" />
								<img src="images/<?php echo $indexpage->fac2 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac3 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac4 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac5 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac6 ?>" width="20px" height="15px" />
                                </div>
                                </div>
<div class="room"><a href="viproom.php"><img class="bor" src="images/<?php echo $indexpage->vimg ?>" width="271px" height="92px" alt="vip room" /></a><b><?php echo $indexpage->roomtype3 ?></b><div class="roominfo"><?php echo $indexpage->roominfo ?>
</div>
 								<div class="img0">
                                <img src="images/<?php echo $indexpage->fac1 ?>" width="20px" height="15px" />
								<img src="images/<?php echo $indexpage->fac2 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac3 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac4 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac5 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac6 ?>" width="20px" height="15px" />
                                </div>
                                </div>
<div class="room"><a href="standerdroom.php">
<img  class="bor" src="images/<?php echo $indexpage->ssrimg ?>" width="271px" height="92px" alt="standerd single room" /></a>
<b><?php echo $indexpage->roomtype4 ?></b><div class="roominfo"><?php echo $indexpage->roominfo ?></div> 								<div class="img0">
<img src="images/<?php echo $indexpage->fac1 ?>" width="20px" height="15px" />
								<img src="images/<?php echo $indexpage->fac2 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac3 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac4 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac5 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac6 ?>" width="20px" height="15px" />
                                </div>
                                </div>
<div class="room"><a href="supperiorroom.php">
<img class="bor" src="images/<?php echo $indexpage->surimg ?>" width="271px" height="92px" alt="supperior single room" /></a>
<b><?php echo $indexpage->roomtype5 ?></b><div class="roominfo"><?php echo $indexpage->roominfo ?></div> 								<div class="img0">
<img src="images/<?php echo $indexpage->fac1 ?>" width="20px" height="15px" />
								<img src="images/<?php echo $indexpage->fac2 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac3 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac4 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac5 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac6 ?>" width="20px" height="15px" />
                                </div>
                                </div>
<div class="room"><a href="familyroom.php"><img class="bor" src="images/<?php echo $indexpage->fimg ?>" width="271px" height="92px" alt="family room" /></a><b><?php echo $indexpage->roomtype6 ?></b><div class="roominfo"><?php echo $indexpage->roominfo ?></div> 								<div class="img0">
<img src="images/<?php echo $indexpage->fac1 ?>" width="20px" height="15px" />
								<img src="images/<?php echo $indexpage->fac2 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac3 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac4 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac5 ?>" width="20px" height="15px" />
                                <img src="images/<?php echo $indexpage->fac6 ?>" width="20px" height="15px" />
                                </div>
                                </div>
</div>

<a href="pic.php"><div class="pic"><img src="images/<?php echo $indexpage->pic ?>" /></div></a>
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
</div>
<div class="copyrightt"><?php echo $indexpage->copyrightt ?></div>
</div>

</body>
</html>
