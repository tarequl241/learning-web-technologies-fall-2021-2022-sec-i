<?php 
	//session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$estatus   = $_post['estatus'];
		$estatus   = $_post['estatus'];

		if($username != ""){
			if($password != ""){
				if($email !=""){

					$con = mysqli_connect('localhost', 'root', '','webtech' );
				
					$sql = "insert into users values('', '{$username}','{$password}','{$email}','user') ";

					if(mysqli_query($con, $sql)){
						header('location: ../views/login.html');
						}
						else{
							echo "try again...";
						}
				
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>