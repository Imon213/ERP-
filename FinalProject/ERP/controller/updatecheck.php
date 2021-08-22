

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

				$sql = "UPDATE `customer` SET `id`=[value-1],`name`=[value-2],`email`=[value-3],`phone`=[value-4],`password`=[value-5],`address`=[value-6] WHERE 1";

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

