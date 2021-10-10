<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		if( ($name != "") && (count($name) >= 2) && ((ord($name) >=65 && ord($name) <=90) || (ord($name) >=97 && ord($name) <=122)) )
		{
			echo $name;
		}
		else
		{
			echo "Your input is invalid. <br/>
            <br/> Formats: 
            <br/> A. Cannot be empty 
            <br/> B. Contains at least two words 
            <br/> C. Must start with a letter 
            <br/> D. Can contain a-z, A-Z, period, dash only<br/>";
		}
	}
?>


<html>
<head>
	<title>name</title>
</head>
<body>
	<form method="post">
		<b>name:<b> 
            <br> 
            <input type="text" name="name" value=""/> 
            <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>