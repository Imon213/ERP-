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
    <link rel="stylesheet" href="../design/reseller_dashboard.css">
    <title>Document</title>
</head>
<body>
   <div>
    
    <table width="100%" rules="rows">

    <tr>
    <td width="20%">
        <img src="../img/1.png">
    </td>
    <td width="50%" align="center">
    <h3 class="title">Where every thing is at your hand</h3>
    
    </td>

    <td  align="right">
       <a class="home" href="reseller_dashboard.php">Home | </a>
       <a class="logout" href="../controller/reseller_logout.php">Logout</a>
    </td>
  </tr>
</table></div>
 
            <div class="right">
            <h3>Welcome <?=$_SESSION['user']['name']?>. You joined as a Reseller.</h3>
            
       </div>
           
           
            
</div>
       <div class="left">
          <ul>
              
              <li><a class="b" href="reseller_addproducts.php">Add Product</a></li>
              <li><a class="f" href="reseller_showallproducts.php">All Product</a></li>
            
              <li><a class="g" href="reseller_seeorderdetails.php">Order Details</a></li>
            
              <li><a class="j" href="monitor.php">Product Monitor</a></li>
              <li><a class="k" href="reseller_feedback.php">Feedback</a></li>
          </ul>
       </div>
       
       <div class="footer" align="center">
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