<?php
	if(isset($_REQUEST['gender']) && isset($_REQUEST['submit']))
	{
		echo $_REQUEST['gender'];
	}
?>
<html>
<head>
	<title>
        Gender
    </title>
</head>
<body>
	<form method="post">
		<b>
            Gender:
        <b> 
            <br>
			<input type="radio" name="gender" value="male"> male
			<input type="radio" name="gender" value="female"> female
			<input type="radio" name="gender" value="other"> other 
            <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>