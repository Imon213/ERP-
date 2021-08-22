

<?php
	
session_start();

if (isset($_POST['submit'])) {

		$name =  $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		



   	$conn = mysqli_connect('localhost', 'root', '', 'xcompany');
				if($conn == null){
					die('DB connection error!');
				}

				$sql = "INSERT INTO `user` (`name`, `phone` ,`email`, `dob`, `gender`, `type`, `password`, `status`) 
				VALUES ('$name', '$phone' ,'$email' ,'$date', '$gender', 'customer', '$password', 'active')";

				$result = mysqli_query($conn, $sql);
				if($result)
				{
					header('location: ../../Responsivepage/view/login.php');
				}
				else{
					echo"error";
                  }

              }	
                
                          
              

	
?>

