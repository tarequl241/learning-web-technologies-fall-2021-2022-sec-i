<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<table width="100%" height="80" border="0" cellpadding="5"
		bgcolor="Orange">
		<tr>
			<td align="center">
			<table width="50%" border="0" align="center" cellpadding="1"
				cellspacing="1">
				<td align="left"><font face="American Captain" color="White"><a href="create.php">Create Account</a> </font></td>

				<td align="left"><font face="American Captain" color="White"><a href="contact.html">Contact Us</a> </font></td>

				
				<td align="center"><font face="American Captain" color="White"><a href="../controller/logout.php">logout </a></font></td>
			</table>



	</table>
	
	<table width="100%" height="350" border="0" cellpadding="5"
		bgcolor="lightgrey">
		<tr>
			<td align="center">
				<table width ="90%" border="0" cellspacing="4" cellpadding="2">
					<tr>
						<td width ="338" align="left"><font face ="American Captain" color="Black" size="5"><a href="adduser.php">Add new users</a>
						<br/>
						<a href="delete.php">Delete Users</a>
						<br/>
						<a href="detailsOfUser.php">View</a>
						<br/>
						<a href="notice.php">Notice</a>
						<br/>
						<a href="jobcircular.php">Job Circular</a>
						<br/>
						<a href="ratings.php">Ratings</a>
						


						</font></td>

					
						<td width ="338" align="Right"><font face ="American Captain" color="Black" size="5"><a href="socials.php">Socials</a>
						<br/>
						<a href="salary.php">Salary</a>
						<br/>
						<a href="manager.php">Manager</a>
						<br/>
						<a href="financereport.php">Finance and Report</a>
						<br/>
						<a href="approval.php">Approval</a>
						<br/>
						<a href="managerrequest.php">Request varify</a>
						</font></td>	


						
					</tr>
				</table>
			</td>	
		</tr>
	</table>

	<video width="100%" autoplay loop>
    <source src= "../image/video2.mp4" type="video/mp4">
    Your browser does not support the video tag.
	</video>
	</table width="100%" height="150" border="0" cellspacing="1" cellpadding="1">
                <tr>
                    <td height="72" align="center" valign="top"> 
                        <table width="100%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                                <td width="100%" align="center"><font face="Satisfy" color="black" size="6">About Us<br/>
                                We are Hotel Green View , one of the most iconic hotels in Chittagong. We have several facilities such as Spa, Swiming pool, well quiped gym <br/>
                                Specias ball room,luxurious dining area, bilingual receptionist and many more !<br/>
                                You are most welcome<br/>
                                Hotel Green View<br/>
                                </font></td>
                            </tr>
                        </table>
                    </td>

                </tr>
            <table>
</body>
</html>

<?php
	}else{
		header('location: ../views/login.html');
	}
?>
