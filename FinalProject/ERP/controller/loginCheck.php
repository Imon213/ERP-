<?php
	session_start();
	    $name = $_POST['name'];
		$password = $_POST['password'];
	
	if(isset($_POST['submit']))
	{
		
		if($name == "" || $password == "")
		{
			echo "Null submission";
			
		}
		else
		{
			$conn = mysqli_connect('localhost', 'root', '', 'customer');
			if($conn == null){
				die('DB connection error!');
			}
			$sql = "SELECT * FROM customer WHERE name = '$name' AND password = '$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			if(mysqli_num_rows($result)>0){
				$_SESSION['status'] = true;
				$_SESSION['name'] = $row['name'];
				$_SESSION['password'] = $row['password'];
				setcookie('status', 'true', time()+5000, '/');
				setcookie('name', $name, time()+3600, '/');
				setcookie('password', $password, time()+3600, '/');
				$_SESSION['user_name'] = $name;
				header('location: ../view/home.php');
			}
			else
			{
				echo "Invalid User";
			}
			

		}
	}
?>