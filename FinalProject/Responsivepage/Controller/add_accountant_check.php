<?php
require('../db.php');
$conn = getConnection();
$data = $_POST['mydata'];
$mydata = json_decode($data);
$name=  $mydata->name;
$email= $mydata->email;
$phone= $mydata->phone;
$dob= $mydata->dob;
$gender= $mydata->gender;
$password= $mydata->password;
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
    $sql1= "select * from user where email='{$email}' and type='accountant'";
    $result1=mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result1)>0 )
    {
        echo 'Your Email or Mobile phone is aready exist. Please try to use differnt Email or Phone';
   
    }
    else
    {
    
        $sql2 = "INSERT INTO user (name,email,phone,gender,dob,password,status,type) VALUES('$name','$email','$phone','$gender','$dob',
    '$password','active','accountant')";
        $result2 = mysqli_query($conn, $sql2); 
        if($result2)
        {
            echo 'Successfuly Accountant Created';
        }
       
    }
}

?>