<?php

	if(isset($_REQUEST['submit']))
  {
		$name = $_REQUEST['myname'];
	}

?>
<html>
<head>
	<title>
        name
    </title>
</head>
<body>
	<form method="post" >
		<b>name:<b> <br> <input type="text" name="myname" value="<?php if(isset($Name)){ echo $Name; }?>"/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>