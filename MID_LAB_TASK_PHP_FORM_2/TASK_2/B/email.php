<?php

	if(isset($_REQUEST['submit']))
	{
		$Email = $_REQUEST['email'];
		if($Email != "")
		{echo $Email;}
	}

?>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post">
		<b>
            EMAIL:
        <b> <br> 
        <input type="email" name="email" value=""> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>