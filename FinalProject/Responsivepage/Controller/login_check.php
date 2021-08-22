<?php
session_start();
require_once('../db.php');
$conn = getConnection();
$uname=$_POST['username'];
$pass=$_POST['password'];

if($uname!='' && $pass!='')
{
    
    $sql= "select * from user where name='{$uname}' and password='{$pass}'";
    $result=mysqli_query($conn, $sql);
   
    if(mysqli_num_rows($result)>0 )
    {
     while($row=mysqli_fetch_array($result))
     {
     
      if($row['type'] == "admin")
      {
      $user=['name'=>$uname];
        $_SESSION['user']=$user;
        $_SESSION['flag']='true';
        if(isset($_POST['rememberme']))
       {
       setcookie("email", $uname,time()+86400);
       setcookie("password", $pass,time()+86400);
       header('location:../view/home.php');
       }
       else
       {
        header('location:../view/home.php');
       }
      
     
      }
      
      elseif($row['type'] == "accountant")
      {
        echo  $row['type'];
      }
      elseif($row['type'] == "customer")
      {
        $user=['name'=>$uname];
        $_SESSION['user']=$user;
        $_SESSION['flag']='true'; 
        if(isset($_POST['rememberme']))
       {
       setcookie("email", $uname,time()+86400);
       setcookie("password", $pass,time()+86400);
       header('location:../../ERP/view/home.php');
       }
       else
       {
        header('location:../../ERP/view/home.php');
       }
      
      }


      elseif($row['type'] == "reseller" && $row['status'] == "accepted")
      {
        $user=['name'=>$uname];
        $_SESSION['user']=$user;
        $_SESSION['flag']='true';
        if(isset($_POST['rememberme']))
       {
       setcookie("email", $uname,time()+86400);
       setcookie("password", $pass,time()+86400);
       header('location:../../project/view/reseller_dashboard.php');
       }
       else
       {
        header('location:../../project/view/reseller_dashboard.php');
       }
     
      }
      else
      {
        header('location:../view/login.php?message=invalid');
      }

      
      
    }
      
       } 
       else {
        header('location:../view/login.php?message=invalid');
      }
}
else
{
    header('location:../view/login.php?message=wrongmessage');
}

?>