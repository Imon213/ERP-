
<!DOCTYPE html>
<html>
<head>
  <title>Monitor</title>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/monitor.css">
    
    <title>Document</title>
</head>
<body>
   
   <div class="container">
       <div class="header">
            <div class="logo">
                <img src="../img/1.png" >
            </div>
            <h2 class="title">Where Every thing is at your hand</h2>
            <div class="menu" align="right">
                <ul>
                    <a class="home" href="reseller_dashboard.php">Home |</a>
                    <a class="logout" href="../controller/logout.php">Logout</a>
                </ul>
            </div>
</div>

   <section id="sec">
    <div class="row">
     <div class="column1" >
      
   
       
        <button id="btn"><a href="customer_order.php" id="a">Order Product</a></button><br>    

        <button id="btn"><a href="reseller_seeorderdetails.php" id="a">Order details</a></button><br>

        <button id="btn"><a href="reseller_productdetails.php" id="a">Product Details</a></button><br>
        <button id="btn"><a href="monitor.php" id="a">Product Monitor</a></button><br>
        <button id="btn"><a href="reseller_feedback.php" id="a">Feedback</a></button><br>
     </div>

     <div class="column2" align="top">
      <h2>Product Monitor</h2>
        <table  width="100%" >
        <tr>
         
          <th>Product name</th>
          <th>Product Code</th>
          <th>Quantity</th>
          

      
        <tr>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "xcompany");
        if ($conn-> connect_error) {
          die("connection faild:". $conn-> connect_error);
        }


        $sql = "SELECT * from cusorder";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["productname"]. 
            "</td><td>". $row["productcode"]. "</td><td>". $row["quantity"]. "</td><tr>";
          }
          echo "</table>";
        }
        else{
          echo "0 result";
        }
        $conn-> close();

         ?>
      
     
        
      </table>

       
     
       
     </div>
     </div>
   </section>

  
</body>
</html>
