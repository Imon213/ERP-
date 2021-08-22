<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    
    <title>Document</title>
</head>

<body>
    <div class="login_form">

        <div class="logo">
        
        <div class="title">Easy to buy</div>

        <div class="subtitle">Login Form</div>
        <div class="fields">
         
            <form method="POST" action="../controller/loginCheck.php">
            <div><input  class="name" type="text" class="name" name="name" placeholder="Name"><br>
        </a><input class="password" type="password" class="password" name="password" placeholder="Password"><br>
         <input class="btn" type="submit" value="Login" class="login" name="submit"><br>
         <a class="bottom" href="forgetpass">Forget Password OR<a href="registration.php" class="a"> Signup</a></div>
        </form>
        </div>
        </div>
    </div>
</body>

</html>