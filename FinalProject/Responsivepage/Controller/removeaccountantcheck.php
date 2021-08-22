<?php
    require('../db.php');
    $conn = getConnection();
    
    $email = $_POST['email'];
   
    
    $sql3 = "DELETE FROM user  WHERE email='{$email}' and type='accountant'";
        $result3 = mysqli_query($conn, $sql3); 
        if ($conn->query($sql3) === TRUE) {
            echo 'Successfuly Accountant Removed';
        }


?>