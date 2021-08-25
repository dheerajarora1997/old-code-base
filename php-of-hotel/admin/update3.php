<?php
$dn=@($_FILES[img3][name]);
 $dtmp=@($_FILES[img3][tmp_name]);
 if(move_uploaded_file($dtmp,"images/$dn"))
  echo'Data Uploaded!<br>';
 else
  echo'Error to Upload Data!<br>';
/*$dt=@($_FILES[img3][type]);
$ds=@($_FILES[img3][size]);
echo $dn.'<br>'.$dt.'<br>'.$ds;
*/require "conn.php";
//$result=mysql_query("update indexpage set img3='$_POST[img3]'");
$result=mysql_query("update indexpage set img3='$dn'");
if($result)	
header('location:hindex.php');
else
echo 'Error To Update!';
?>
