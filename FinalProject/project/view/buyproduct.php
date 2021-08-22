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
    <script type="text/javascript" src="../js/buyproduct.js"></script>
    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="header">
            <div class="logo">
                <img src="../img/1.png" class="logo-image">
            </div>
            <h2 class="title">Where Every thing is at your hand</h2>
            <h3>Logged in as  <?=$_SESSION['user']['name']?></h3>
            <div class="menu">
                <ul>
                    <li><a class="home" href="reseller_dashboard.php">Home</a></li>
                    <li><a class="logout" href="../controller/reseller_logout.php">Logout</a></li>
                </ul>
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
       <div class="right" align="center">
       <?php while($row=mysqli_fetch_array($result)){?>
            <?php
            $img=$row['image'];
            $link='../product/'.$img; ?>
            
             <div class="div1">
                 <img class="pimage" src="<?php echo $link;?>">
                <a class="buybtn" href="../controller/buycheck.php?buy=<?=$row['id']?>">BUY NOW</a>
                <?php
            //     if(isset($_GET['msg']))
            //    {
            //        $message=$_GET['msg'];
            //        if($message=='success')
            //        {
    
            //           echo ' <span class="password_error"> Thanks for buy our product. Stay with us </span> <br> <br>';
            //        }
                  
            //    }
            //    ?>
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