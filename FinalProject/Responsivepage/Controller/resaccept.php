<?php
    require('../db.php');
    $conn = getConnection();
    
    $email = $_POST['email'];
   $sql="UPDATE user SET status ='accepted' WHERE email='$email' and type='reseller'";
   $result= mysqli_query($conn, $sql);
   if($result)
   {
       echo 'Successfuly Reseller Request Accepted';
   }
?>