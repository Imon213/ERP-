<?php
session_start();
require('../db.php');
$conn=getConnection();
$sql="select * from product";
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
    <link rel="stylesheet" href="../design/reseller_showallproducts.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="header">
            <div class="logo">
                <img src="../img/1.png" >
            </div>
            <h2 class="title">Where Every thing is at your hand</h2>
            <div class="menu">
                <ul>
                    <li><a class="home" href="reseller_dashboard.php">Home</a></li>
                    <li><a class="logout" href="../controller/logout.php">Logout</a></li>
                </ul>
            </div>
</div>
       
       <div class="right">
           <div class="right-container">
           <?php while($row=mysqli_fetch_array($result)){?>
            <?php
            $img=$row['image'];
            $link='../../Responsivepage/product/'.$img; ?>
            <a href="buyproduct.php?id=<?=$row['id']?>" class="showdetails">
               <div class="product">
                  
               <img src="<?php echo $link; ?>" id="img"><br><br>
               <span class="p">Product Name: </span>
               <span class='name'><?php echo $row['name'];?></span><br><br>
               <span class="p1">Product Code: </span>
               <span class='name'><?php echo $row['id'];?></span><br><br>
               <span class="p2">Product Type: </span>
               <span class='name'><?php echo $row['type'];?></span><br><br>
               <span class="p">Product Price: </span>
               <span class='name'><?php echo $row['price'];?>TK</span><br><br>
               </div>
               </a>
               <?php
           }
               ?>
               
           </div>

           
       </div>
       <div class="footer">
          <h3>Copyright@2021</hj3>
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