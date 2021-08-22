<?php
session_start();
require_once('../db.php');
$conn = getConnection();
$name=$_POST['name'];
$tel=$_POST['phone'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$password=$_POST['password'];


if($name!='' && $tel!='' && $email!=''&& $dob!='' && $gender!=''&& $password!='')
{
    
    $sql= "INSERT INTO user(name, phone,email,dob, gender, password, status,type) VALUES ('{$name}','{$tel}','{$email}','{$dob}','{$gender}','{$password}','pending','reseller')";
    $result=mysqli_query($conn, $sql);
    if ($result)
    {
      
      header('location:../../Responsivepage/view/login.php');
    }
    else{
      echo "error";
    }

    }
      



?>