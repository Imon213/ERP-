<?php
session_start();
require('../db.php');
$id=$_GET['id'];
$conn=getConnection();
$sql="select * from product where id='{$id}'";
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
    <link rel="stylesheet" href="../Design/productdetails.css">
    <script type="text/javascript" src="../js/removeaccountant.js"></script>
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
       <div class="right" align="center">
       <?php while($row=mysqli_fetch_array($result)){?>
            <?php
            $img=$row['image'];
            $link='../product/'.$img; ?>
               
             <div class="div1">
                 <img class="pimage" src="<?php echo $link;?>">
             </div> 
             <div class="div2">
                 <table>
                     <tr>
                         <td>
                             Product Name:
                         </td>
                         <td>
                             <?=$row['name']?>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Product Code:
                         </td>
                         <td>
                             <?=$row['id']?>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Product Price:
                         </td>
                         <td>
                             <?=$row['price']?>TK
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Product Type:
                         </td>
                         <td>
                             <?=$row['type']?>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                            <span class="des">Product Description</span> 
                         </td>
                        
                     </tr>
                     <tr>
                        <td colspan="2">
                        <span class="details"><?=$row['details']?></span></td>
                     </tr>
                 </table>
             </div>

         <?php
       }
         ?>
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