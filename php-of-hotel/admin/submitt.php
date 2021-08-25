<?php
$dn=@($_FILES[pic][name]);
$dt=@($_FILES[pic][type]);
$ds=@($_FILES[pic][size]);
$dtmp=@($_FILES[pic][tmp_name]);

echo 'File Name='.$dn.'<br>';
echo 'File type='.$dt.'<br>';
echo 'File size='.$ds.'<br>';
echo 'File tmp_name='.$dtmp.'<br>';

if(move_uploaded_file($dtmp,"images/$dn"))
echo 'Data uploaded !<br>';

else
echo 'Error to upload Data !<br>';


?>
<!--<a href="update.php"><input type="button" name="hindex" value="hindex"></a>-->
