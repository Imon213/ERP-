
<!DOCTYPE html>
<html>
<head>
  <title>OrderPage</title>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/customer_order.css">
    
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
 

   <section id="sec">
    <div class="row">
     <div class="column" style="background-color:#fff;">
      
      
       

      

        
        <button id="btn"><a href="reseller_product_monitor.php" id="a">Product Monitor</a></button><br>

        <button id="btn"><a href="reseller_seeorderdetails.php" id="a">Order details</a></button><br>

     
        <button id="btn"><a href="reseller_product_monitor.php" id="a">Product Monitor</a></button><br>
        <button id="btn"><a href="reseller_feedback.php" id="a">Feedback</a></button><br>

       

     </div>

     <div class="column" style="background-color:#fff;">
      <h2>Order Product</h2>
      <form method="POST" action="../controller/ordercheck.php" onsubmit="return(validate());">
    <fieldset id="field">
      <legend>Please Order</legend>
      <table id="tbl">
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" placeholder="Enter Name" class="input" id="name"></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" name="address" placeholder="Enter Address" class="input" id="address"></td>
        </tr>
        
        <tr>
          <td>Product Name</td>
          <td><input type="text" name="productname" placeholder="Enter product name" class="input" id="productname"></td>
        </tr>
        <tr>
          <td>Mobile no.</td>
          <td><input type="tel" name="phone" placeholder="Enter Phone " class="input" id="phone"></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="number" name="quantity" placeholder="Enter quantity" class="input" id="quantity"></td>
        </tr>
         <tr>
          <td>Price</td>
          <td><input type="number" name="price" placeholder="Enter price" class="input" id="price"></td>
        </tr>
        
        
        
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="submit" id="s-btn"></td>
        </tr>
      </table>
    </fieldset>
  </form>
     
       
     </div>
     </div>
   </section>
</body>
</html>
