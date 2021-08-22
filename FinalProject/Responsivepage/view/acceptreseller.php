<?php
session_start();
$resemail = $_GET['email'];
require('../db.php');
$conn=getConnection();
$sql="select * from user where email='{$resemail}'";
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
    <link rel="stylesheet" href="../Design/acceptreseller.css">
    <script type="text/javascript" src="../js/resellerrequest.js"></script>
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
              <li><a class="three" href="addaccountant.php">Add Accountant</a></li>
              <li><a class="four" href="modifyaccountant.php">Modify Accountant</a></li>
              <li><a class="five" href="findaccountant.php">Find Accountant</a></li>
              <li><a class="six" href="resellerrequest.php">Reseller Request</a></li>
              <li><a class="seven" href="findreseller.php">Find Reseller</a></li>
              <li><a class="eignt" href="orderrequest.php">Order Request</a></li>
              <li><a class="nine" href="showproduct.php">Show Product</a></li>
              <li><a class="ten" href="productmonitor">Product Monitor</a></li>
              <li><a class="eleven" href="checkreview">Check Review</a></li>
          </ul>
       </div>
       <div class="right" align="center">
           
               <div class="information" align="center">
              <h3 class="title"> RESELLER REQUEST</h3>
              <table>
              <?php while($row=mysqli_fetch_array($result)){?>
              <tr>
                 <td> <label>Name: <label><td>
                     <td> <label id="name"><?php echo $row['name']?></label></td>
                </tr>
                <tr>
                 <td><label>Email: <label> <td>
                     <td> <input type="email" id="remail" value="<?php echo $row['email'];?>"></td>
                </tr>
                <tr>
                 <td> <label>Phone: <label> <td>
                     <td>  <label id="phone"><?php echo $row['phone']?></label></td>
                </tr>
                <tr>
                 <td>  <label>Gender: <label><td>
                     <td>  <label id="gender"><?php echo $row['gender']?></label></td>
                </tr>
                <tr>
                 <td> <label>Date of Birth: <label> <td>
                     <td> <label id="dob"><?php echo $row['dob']?></label> </td>
                </tr>
                <tr>
                 <td>  <label>Password: <label> <td>
                     <td> <label id="password"><?php echo $row['password']?></label> </td>
                </tr>
                <?php
              }
                ?>
             </table>
             <br><br>
            
              
           <input type="button" value="ACCEPT" id="updatebutton" onclick="resAccept()">
               <a class="cancel" href="resellerrequest.php">CANCEL</a><br><br>
               <h3 id="result2"></h3>
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