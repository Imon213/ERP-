<?php
session_start();
require('../db.php');
$conn=getConnection();
$sql="SELECT * FROM user WHERE type='reseller'and status='pending'";
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
    <link rel="stylesheet" href="../Design/resellerrequest.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="header">
            <div class="logo">
                <img src="../image/logo.png" class="logo-image">
            </div>
            <h2 class="title">Where Every thing is at your hand</h2>
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
           <center>
           <table>
               <tr>
                   <th width="200px">Name</th>
                   <th width="200px">Email</th>
                   <th width="200px">Phone</th>
                   <th width="100px">Gender</th>
                   <th width="200px">Date of Birth</th>
                   <th width="100px">Request</th>
                   <th colspan="2">Status</th>
              </tr>
    <?php while($row=mysqli_fetch_array($result)){?>
    <tr>
     
        <td><?php echo $row['name'];?></td>
        <td><input id="remail" type="email" value="<?php echo $row['email'];?>"></td>
        <td><?php echo $row['phone'];?></td>
        <td ><?php echo $row['gender'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['status'];?></td>
        <td>
        <img src="../image/add-friend.png">
       <a class="accept" href="acceptreseller.php?email=<?=$row['email']?>">Accept Request</a>
        </td>
        <td>
            <img src="../image/remove-user.png">
             <a class="accept" href="removeresellerreq.php?email=<?=$row['email']?>">Remove Request</a>
        </td>
   
</tr>
    <?php } ?>
       
          </table>
          </center>
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