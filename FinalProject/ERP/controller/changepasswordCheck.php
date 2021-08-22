<?php
	session_start();
	    $email = $_POST['email'];
		
	
	if(isset($_POST['submit']))
	{
		
		if($email == "")
		{
			echo "Null submission";
		}
		else
		{
			$conn = mysqli_connect('localhost', 'root', '', 'xcompany');
			if($conn == null){
				die('DB connection error!');
			}
			$name=$_SESSION['user']['name'];
			$sql = "SELECT * FROM user WHERE email = '$email'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			if(mysqli_num_rows($result)>0){
				$_SESSION['status'] = true;
				$_SESSION['email'] = $row['email'];
				
				setcookie('status', 'true', time()+5000, '/');
				setcookie('email', $email, time()+3600, '/');
			
				header('location: ../view/page2.php');
			}
			else
			{
				echo "Invalid User";
			}
			

		}
	}
?>