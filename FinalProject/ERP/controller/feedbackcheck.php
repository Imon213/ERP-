<?php
require('../db.php');
$conn = getConnection();
$data = $_POST['mydata'];
$mydata = json_decode($data);
$name=  $mydata->name;
$email= $mydata->email;
$comment= $mydata->comment;

if(strlen($name)<5)
{
    echo 'Name should be more than 5 character';
}
else if(strlen($email)<11)
{
    echo 'Email should be more than 11 character';
}

else{
    $sql1= "INSERT INTO  feedback (name,email,comment,type) VALUES ('$name', '$email', '$comment', 'Customer')";
    $result1=mysqli_query($conn, $sql1);
    
}

?>