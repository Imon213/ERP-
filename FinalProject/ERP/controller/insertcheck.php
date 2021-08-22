

<?php
	
session_start();

if (isset($_POST['submit'])) {

		$name =  $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$address = $_POST['address'];

   	

   	$conn = mysqli_connect('localhost', 'root', '', 'customer');
				if($conn == null){
					die('DB connection error!');
				}

				$sql = "INSERT INTO `customer` (`id`, `name`, `email` ,`phone`, `password`, `address`) VALUES (NULL, '$name', '$email' ,'$phone' ,'$password', `address`)";

				$result = mysqli_query($conn, $sql);
				if($result)
				{
					header('location: ../view/editprofile.php');
				}
				else{
					echo"error";
                  }

              }	
                          
                          if (empty($_POST["name"])) {
							    $name = "Name is required";
							  } else {
							    $name = test_input($_POST["name"]);
							  }
              

	
?>

