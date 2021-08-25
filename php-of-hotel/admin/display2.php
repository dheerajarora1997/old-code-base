<html>
<head>
<script>
function aa()
{
	document.location='afterlogin.php';
}
function delconfirm(id)
{
	if(confirm("Do you want to delete this record?"))
	document.location="delete2.php?uid="+id;
}
</script>
</head>
<body background="images/templatemo-slide-3.png">
<h2 align="center">User all records<input type="button" name="goto" class="but" value="Go To Main form" onClick="aa();"/></h2>
<form name="display2" method="post" action="delete2.php" >
<table align="center" cellpadding="0" cellspacing="0" border="1">
<tr>
<th>&nbsp;</th>
<th>Name</th>
<th>Lastname</th>
<th>Contact</th>
<th>RoomType</th>
<th>StartDate</th>
<th>EndDate</th>

</tr>
<?php
session_start();
 if(empty(@($_SESSION[sname])))
  header('location:index.php');

require"conn.php";
$result=mysql_query("select * from custmers2");
while($record=mysql_fetch_object($result))
{
	?>
	<tr>
	<td><input type='checkbox' name='selectt[]' value='<?php echo $record->sid;?>'/></td>
	<td><?php echo $record->name;?></td>
    <td><?php echo $record->lastname;?></td>
	<td><?php echo $record->phone_no;?></td>
	<td><?php echo $record->roomtype;?></td>
    <td><?php echo $record->startdate;?></td>
	<td><?php echo $record->enddate;?></td>
	
</tr>    
<?php	
}
?>
</table>
</form>
</body>
</html>
