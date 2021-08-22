<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/reseller_login.css">
    
    <title>Document</title>
</head>

<body>
       

    <div class="login_form" align="center">
      <tr>
    <td width="100%">
        <h2 class="comp">xCOMPANY</h2>
    </td>
  </tr>

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
    
            <form method="POST" action="../controller/reseller_login_check.php">
            <div class="username"><input type="text" class="name" name="name" placeholder="Name"></div><br>
            <div class="userpassword"></a><input type="password" class="password" name="password" placeholder="Password"></div><br>
            <div class="btn"><input type="submit" value="Login" class="login"></div><br>
           
        </form>
        </div>
    </div>
</body>

</html>