<?php
session_start();
require_once('../db.php');
$conn = getConnection();
$uname=$_POST['name'];
$pass=$_POST['password'];

if($uname!='' && $pass!='')
{
    
    $sql= "select * from reseller where name='{$uname}' and password='{$pass}'";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >0 )
    {
      $user=['name'=>$uname];
        $_SESSION['user']=$user;
        $_SESSION['flag']='true';
      header('location:../view/reseller_dashboard.php');
    }
      else{
        header('location:../view/reseller_login.php?message=invalid');
      }
}
else
{
    header('location:../view/reseller_login.php?message=wrongmessage');
}

?>