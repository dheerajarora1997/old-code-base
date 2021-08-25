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
	document.location="delete.php?uid="+id;
}
</script>
</head>
<body style="background-image:url(images/templatemo-slide-3.png);">
<h2 align="center">User all records<input class="but" type="button" name="goto" value="Go To Main form" onClick="aa();"/></h2>
<form name="display1" method="post" action="delete.php" >
<table align="center" cellpadding="0" cellspacing="0" border="1">
<tr>
<th>&nbsp;</th>
<th>Name</th>
<th>Lastname</th>
<th>Contact</th>
<th>Email</th>
<th>RoomType</th>
<th>StartDate</th>
<th>EndDate</th>

<th colspan="2">Operations</th>
</tr>
<?php
session_start();
 if(empty(@($_SESSION[sname])))
  header('location:index.php');

require"conn.php";
$result=mysql_query("select * from custmer");
while($record=mysql_fetch_object($result))
{
	?>
	<tr>
	<td><input type='checkbox' name='select[]' value='<?php echo $record->sid;?>'/></td>
	<td><?php echo $record->name;?></td>
    <td><?php echo $record->lastname;?></td>
	<td><?php echo $record->phone_no;?></td>
	<td><?php echo $record->email;?></td>
	<td><?php echo $record->roomtype;?></td>
    <td><?php echo $record->startdate;?></td>
	<td><?php echo $record->enddate;?></td>
	
    
	<td><?php echo "<a href='#' onclick='delconfirm($record->sid);'>Delete</a>";?></td>
	</tr>
<?php	
}
?>
</table>
</form>
</body>
</html>
