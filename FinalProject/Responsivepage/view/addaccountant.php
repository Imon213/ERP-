<?php
session_start();
if(isset($_SESSION['flag']))
{
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Design/addaccountant.css">
    <script type="text/javascript" src="../js/addaccountant.js"></script>
    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="header">
            <div class="logo">
                <img src="../image/logo.png" class="logo-image">
            </div>
            <h2 class="title">Where Every thing is at your hand</h2>
            <h3>Logged in as <?=$_SESSION['user']['name']?></h3>
            <div class="menu">
                <ul>
                    <li><a class="home" href="home.php">Home</a></li>
                    <li><a class="logout" href="../Controller/logout.php">Logout</a></li>
                </ul>
            </div>
</div>
       <div class="left">
          <ul>
          <li><a class="one" href="home.php">Home   </a></li>
              <li><a class="two" href="addproduct.php">Add Product</a></li>
              <li><a class="three" href="../view/addaccountant.php">Add Accountant</a></li>
              <li><a class="four" href="showcustomer.php">Show Customer</a></li>
              <li><a class="five" href="findaccountant.php">Find Accountant</a></li>
              <li><a class="six" href="resellerrequest.php">Reseller Request</a></li>
              <li><a class="seven" href="findreseller.php">Find Reseller</a></li>
              <li><a class="eignt" href="orderrequest.php">Order Request</a></li>
              <li><a class="nine" href="showproduct.php">Show Product</a></li>
              <li><a class="eleven" href="review.php">Check Review</a></li>
          </ul>
       </div>
       <div class="right">
           
               <div class="input-field" align="center">
              <h3 class="title"> ACCOUNTANT REGISTATION</h3>
              <input type="text" id="name" name="name" value="" placeholder="Enter Accountant Name"><br><br>
              <input type="number" id="phone" name="name" value="" placeholder="Enter Accountant Phone"><br><br>
              <input type="email" id="email" value="" placeholder="Enter Accountant Email"><br><br>
              <input type="password" id="password" value="" placeholder="Enter Accountant Password"><br><br>
            <label for="dob"> DATE OF BIRTH:</label> <input type="date" id="dob" value="" ><br><br>
              <input type="radio" id="male" name="gender" value="Male"><label for="male">MALE</h3>
              <input type="radio" id="female" name="gender" value="Female"><label for="female">FEMALE</h3>
              <input type="radio" id="others" name="gender" value="Others"><label for="others">OTHERS</h3><br><br>
              <input type="button" class="btn" value="Submit" onclick="addAccountant()"><br><br>
              <label id="result"></label>
              
              </div>

              

         
       </div>
       <div class="footer">
          <h3> @copyright2021</hj3>
       </div>
   </div>
</body>
</html>
<?php
}
else{
  header('location:login.php');
}

?>