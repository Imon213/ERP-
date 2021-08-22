<?php
    require('../db.php');
    $conn = getConnection();
    
    $email = $_POST['email'];
   $sql="DELETE FROM user WHERE email='$email' and type='reseller'";
   $result= mysqli_query($conn, $sql);
   if($result)
   {
       echo 'Successfuly Reseller Request Removed';
   }
?>