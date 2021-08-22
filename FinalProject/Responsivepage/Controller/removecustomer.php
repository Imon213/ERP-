<?php
    require('../db.php');
    $conn = getConnection();
    
    $email = $_POST['email'];
   
    
    $sql3 = "DELETE FROM user  WHERE email='{$email}' and type='customer'";
        $result3 = mysqli_query($conn, $sql3); 
        if ($conn->query($sql3) === TRUE) {
            echo 'Successfuly Customer Removed';
        }


?>