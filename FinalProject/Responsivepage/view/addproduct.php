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
    <link rel="stylesheet" href="../Design/addproduct.css">
   
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
       </div>
       <div class="right">
           

        <div class="input-field">
            <span id="title">ADD PRODUCT</span><br><br>
            <form action="../Controller/addproductcheck.php" method="POST" enctype="multipart/form-data">
            <input type="file" accept="image/*" id="image" name="image"  value=""  ><br><br>
            <input type="text" id="name" name="name" placeholder="Enter product Name"><br><br>
            <input type="text" name="id" id="id" placeholder="Enter product id"><br><br>
            <input type="number" name="price" id="price" placeholder="Enter product Price"><br><br>
           <select name="type" id="type">
              <option value="">Select any product Type</option>
               <option value="Shirt">Shirt</option>
               <option value="Pant">Pant</option>
               <option value="Tshirt">Tshirt</option>
               <option value="Kurti">Kurti</option>
               <option value="3Pcs">3pcs</option>
           </select>
           <br><br>
           <textarea name="details" id="details" cols="30" rows="10" value="">Enter Product Details</textarea><br><br>
           <input type="submit" name="submit" id="submit" value="SUBMIT">
           </form>
           <br><br>
           <?php 
               if(isset($_GET['msg']))
               {
                   $message=$_GET['msg'];
                   if($message=='success')
                   {
    
                      echo ' <span class="password_error"> Product Successfuly Uploaded </span> <br> <br>';
                   }
                }
                if(isset($_GET['msg']))
               {
                   $message=$_GET['msg'];
                   if($message=='null')
                   {
    
                      echo ' <span class="password_error"> Information missing </span> <br> <br>';
                   }
                }
                   ?>
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