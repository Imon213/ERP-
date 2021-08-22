<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Design/login_design.css">
    
    <title>Document</title>
</head>

<body>
    <div class="login_form">

        <div class="logo">
        </div>
        <div class="title">Easy to buy</div>
        <div class="subtitle">Login Form</div>
        <div class="fields">
            <div class="loginvalidation" align="center">
            <?php 
               if(isset($_GET['message']))
               {
                   $message=$_GET['message'];
                   if($message=='wrongmessage')
                   {
    
                      echo ' <span class="password_error"> Username or password is missing </span> <br> <br>';
                   }
                   $mess=$_GET['message'];
                   if($message=='invalid')
                   {
    
                      echo ' <span class="password_error"> Invalid Username or Password </span> <br> <br>';
                   }
               }
           ?>
           </div>
            <form method="POST" action="../Controller/login_check.php">
            <div class="username"><img class="nameicon" src="../image/nameicon.gif">
            <input type="text" class="name" name="username" placeholder="Name" value="<?php
         if(isset($_COOKIE['email'])){echo $_COOKIE['email'];}?>"></div>
            <div class="userpassword"><img class="passwordicon" src="../image/passwordicon.gif"></a>
            <input type="password" class="password" name="password" placeholder="Password" value="<?php
         if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>"></div>
            <div class="btn"><input type="submit" value="Login" class="login"></div>
            <input type="checkbox" class="rememberme" name="rememberme" value="rememberme"> Remember Me
            <div class="bottom">Signup as <a href="../../project/view/reseller_registration.php">Reseller</a> OR<a href="../../ERP/view/registration.php"> Customer</a></div>
        </form>
        </div>
    </div>
</body>

</html>