<?php
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name != "")
		{
			echo $name;
		}
	}
?>
<html>
<head>
	<title>
        name
    </title>
</head>
<body>
	<form method="post">
		<b>
            name:
        <b>
        <br> <input type="text" name="myname" value=""/> <br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>