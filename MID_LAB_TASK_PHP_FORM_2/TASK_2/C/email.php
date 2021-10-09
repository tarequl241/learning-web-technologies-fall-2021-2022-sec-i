<?php

	if(isset($_REQUEST['submit']))
  {
		$Email = $_REQUEST['email'];
	}

?>
<html>
<head>
	<title>
        email
    </title>
</head>
<body>
	<form method="post" >
		<b>
            email:
        <b> 
            <br> <input type="email" name="myemail" value="<?php if(isset($email)){ echo $email; }?>"/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>