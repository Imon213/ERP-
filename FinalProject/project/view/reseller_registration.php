<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/reseller_registration.css">
    
    <title>Document</title>
</head>

<body>


  <div>
    
    <table width="100%" rules="rows">

    <tr>
    <td width="20%">
        <h2 class="comp">xCOMPANY</h2>
    </td>
    <td width="30%" >
    <h3 class="title">Where every thing is at your hand</h3>
    
    </td>
    <td width=2% align="right">
      <a href="../view/reseller_login.php" class="link">Login</a>
    </td>
  </tr>
</table></div>
   

    <div class="registration_form">

        <div class="logo">
        </div>
     
        <div class="subtitle">Registration Form</div>
        <div class="fields">
            <div class="registration_validation" align="center">
            <?php 
               if(isset($_GET['message']))
               {
                   $message=$_GET['message'];
                   if($message=='null value')
                   {
    
                      echo ' <span class="error"> Information missing.Please check again..... </span> <br> <br>';
                   }
                   
               }
           ?>
           </div>
            <form method="POST" action="../controller/reseller_registration_check.php">
            <div class=container>

              <input type="name" class="name" name="name" id="name" placeholder="Enter Your Name"><br><br>

              <input type="tel" id="phone" name="phone"  placeholder="Enter Your Phone Number"><br><br>

            <input type="email" id="email" name="email" placeholder="Enter Your Email"><br><br>
            
            
            <input type="date" id="dob" name="dob"> <br><br>

            


            <input type="password" class="password" name="password" placeholder="Password"><br><br>
            
            <input type="radio" name="gender" id="male" value="Male">Male
            <input type="radio" name="gender" id="female" value="Female">Female
            <input type="radio" name="gender" id="others" value="Others">Others
            <br><br>
            
           <button class="btn" type="submit" value="Submit" id="submit">Submit</button>
            </div>
        </form>
        </div>
    </div>
</body>

</html>