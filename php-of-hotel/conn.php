<?php
$link=@(mysql_connect('localhost','root','')) or die('unable to connect with MYSQL');

mysql_select_db('hotel0',$link) or die ('unkown database')
?>