<?php
require('../db.php');
$conn = getConnection();

$data = $_POST['mydata'];
$mydata = json_decode($data);
$name=$mydata->name;
$phone=$mydata->phone;
$email=$mydata->email;
$password=$mydata->password;
$gender=$mydata->gender;
$dob=$mydata->dob;
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
else if(strlen($password)<6)
{
    echo 'Password should be more than 6 character';
}
else{
        $sql2 = "UPDATE user SET name='{$name}', phone='{$phone}',email='{$email}',password='{$password}',dob='{$dob}',gender='{$gender}' WHERE email='{$email}'";
        $result2 = mysqli_query($conn, $sql2); 
}

      
?>