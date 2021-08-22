

<?php
	
session_start();

if (isset($_POST['submit'])) {

		$name =  $_POST['name'];
	    $address = $_POST['address'];
		$productname = $_POST['productname'];
		$phone = $_POST['phone'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		
   	

   	$conn = mysqli_connect('localhost', 'root', '', 'xcompany');
				if($conn == null){
					die('DB connection error!');
				}

				$sql = "INSERT INTO `cusorder` (`productcode`, `name`, `address` ,`productname`, `phone`, `quantity`, `price`) VALUES (NULL, '$name', '$address' ,'$productname' ,'$phone', '$quantity','$price')";

				$result = mysqli_query($conn, $sql);
				if($result)
				{
					header('location: ../view/order.php');
				}
				else{
					header('location: ../view/order.php');
                  }

              }	
                          
          if(strlen($name)<5)
{
    echo 'Name should be more than 5 character';
}
else if(strlen($email)<11)
{
    echo 'Email should be more than 11 character';
}
else if(strlen($phone)<=10)
{
    echo 'Phone number should be more than 10 character';
}



	
?>

