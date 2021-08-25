
<?php
session_start();
if(empty(@($_SESSION[sname])))
header('location:index.php');
?>
<link rel="stylesheet" type="text/css" href="style.css" />

<body background="images/templatemo-slide-3.png" style="background-repeat:no-repeat;">
<div class="logoo">HOTEL <font color="#cf820f"> DELUXE</font>
<div class="subtitle">Your text here Your text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text hereYour text here</div>
</div>
<div class="ty">
<p align="left">
Hello,<br>
Welcome admin our website<br>Your login is successfully done !<br>
<br>
<a href="destroy.php"><button class="but">Signout</button></a> &nbsp; &nbsp;
<a href="changepass.php"><button class="but">Change password</button></a><br><br>
<a href='display1.php'><button class="but">Custmers</button></a>&nbsp; &nbsp;
<a href='edit.php'><button class="but">Edit pages</button></a>&nbsp; &nbsp;
<br><br>
&nbsp; &nbsp;&nbsp;
<a href='display2.php'><button class="but">Previous custmers Custmers</button></a>&nbsp; &nbsp;
</p>
</div>
</body>