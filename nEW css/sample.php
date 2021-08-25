<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="javascript" src="js/jquery-plugin.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" 
href="style.css" />
<style>
.h{background-color:red; color:white; width:200px; height:200px; display:none;}
#but{background-color:red; width:20px;}
</style>
</head>

<body>
<input type="button"  id="but" /><br />
<br />
<div class="h">sva</div>

<br />
<br />
<br />
<br />
<br />
<p>saucasvj</p>
<br />
<select style="width:100px;" id="bcolor" >
<option value="red">RED</option>
<option value="blue">BLUE</option>
<option value="green">GREEN</option>
<option value="yellow">YELLOW</option>
</select>
<h1>toogle</h1>

<h6>heading 6</h6><span id="add"></span></body>
</html>
<script>
a=parseInt(prompt('enter '))
</script>
<script>


	var my=$('#bcolor').val();
	$('html').css("color",my);
	$('#bcolor').change(function(){
		var my=$('#bcolor').val();
		$("html").css("color",my)
		});

</script>