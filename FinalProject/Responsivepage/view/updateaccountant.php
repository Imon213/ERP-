<?php
session_start();
$email = $_GET['email'];
require('../db.php');
$conn=getConnection();
$sql="select * from user where email='{$email}'";
$result= mysqli_query($conn, $sql);
if(isset($_SESSION['flag']))
{
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Design/updateaccountant.css">
    <script type="text/javascript" src="../js/updateaccountant.js"></script>
    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="header">
            <div class="logo">
                <img src="../image/logo.png" class="logo-image">
            </div>
            <h2 class="title">Where Every thing is at your hand</h2>
            <h3>Logged in as Imon</h3>
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
              <h3 class="title"> UPDATE ACCOUNTANT INFORMATIN</h3>
              <?php while($row=mysqli_fetch_array($result)){?>
        
              <label for="name">Name: </label>
              <input type="text" id="name" name="name" value="<?php echo $row['name'];?>"><br><br>
              <label for="phone">Phone: </label>
              <input type="number" id="phone" name="name" value="<?php echo $row['phone'];?>"> <br><br>
              <label for="email">Email: </label>
              <input type="email" id="email" value="<?php echo $row['email'];?>"><br><br>
              <label for="password">Password</label>
              <input type="password" id="password" value="<?php echo $row['password'];?>" ><br><br>
              <label for="dob">Date of Birth: </label>
              <input type="text" id="dob" value="<?php echo $row['dob'];?>"><br><br>
              <label for="gender">Gender: </label>
              <input type="text" id="gender" value="<?php echo $row['gender'];?>"><br><br><br>
              <?php
             }?>
           
           <input type="button" value="Update" id="updatebutton" onclick="accountantUpdate()">
               <a class="cancel" href="findaccountant.php">Cancel</a><br><br>
               <h3 id="result1">hello</h3>
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