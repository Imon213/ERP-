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
    <link rel="stylesheet" href="../design/reseller_addproducts.css">
   
    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="header">
            <div class="logo">
                <img src="../img/1.png">
            </div>
            <h2 class="title">Where Every thing is at your hand</h2>
            <h3>Logged in as tasmia islam</h3>
            <div class="menu">
                
                    <a class="home" href="reseller_dashboard.php">Home|</a>
                    <a class="logout" href="../controller/reseller_logout.php">Logout</a>
                
            </div>
</div>
       <div class="left">
         <ul>
              
              <li><a class="b" href="reseller_addproducts.php">Add Product</a></li>
              <li><a class="f" href="reseller_showallproducts.php">All Product</a></li>
             
              <li><a class="g" href="reseller_seeorderdetails.php">Order Details</a></li>
             
              <li><a class="j" href="reseller_product_monitor.php">Product Monitor</a></li>
              <li><a class="k" href="reseller_feedback.php">Feedback</a></li>
          </ul>
       </div>
       <div class="right">
           

        <div class="input-field">
            <span id="title">ADD PRODUCT</span><br><br>
            <form action="../controller/reseller_addproducts_check.php" method="POST" enctype="multipart/form-data">
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
           <input type="submit" name="submit" id="submit" value="SUBMIT" >
           </form>
        </div>
   

              

         
       </div>
       <div class="footer">
          <h3> Copyright@2021</h3>
       </div>
   </div>
</body>
</html>
<?php
}
else{
  header('location:reseller_login.php');
}

?>