<?php

	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['email'];
		if($email != "")
		{
			echo $email;
		}
		else
		{
			echo "Your input is invalid. <br/>
            <br/>Formats: 
            <br/> A. Cannot be empty 
            <br/> B. Must be a valid email address (i.e anything@example.com)<br/>";
		}
	}
?>


<html>
<head>
	<title>email</title>
</head>
<body>
	<form method="post">
		<b>
            email:
        <b> 
            <br> <input type="email" name="email" value=""> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>