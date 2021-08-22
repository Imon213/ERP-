
<!DOCTYPE html>
<html>
<head>
  <title>Index Page</title>
<!DOCTYPE html>
<html>
<head>
  <title>Home page</title>
  <style>
    #a{
      font-size: 15px;
      font-weight: 500;
      color: #fff;
      text-decoration: none;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#header{
     width: 100%;
     background-color: #08c;
     text-align: center;
     padding-top: 50px;
    padding-bottom: 50px;
    font-size: 30px;
    font-weight: 700;
}
* {
  box-sizing: border-box;

}


.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 650px; 
  border-right: 1px solid #000;
   border: 1px solid #000;
   font-size: 15px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
#btn{
     margin-top: 12px;
         border: 1px solid #000;
         background-color: #08c;
         padding: 5px 15px 5px 15px;
          border-radius: 100px;
}
</style>

</head>
<body>
   
   <header id="header">
    <div>
      <h2>Welcome to the Dashboard</h2>
    </div>
     
   </header>

   <section id="sec">
    <div class="row">
     <div class="column" style="background-color:#fff;">
      
        <h2>Dashboard<hr></h2>
        <button id="btn"><a href="home.php" id="a">Dashboard</a></button><br>

        <button id="btn"><a href="editprofile.php" id="a">Edit Profile</a></button><br>

        <button id="btn"><a href="changeprofile.php" id="a">Change Profile Picture</a></button><br>

        <button id="btn"><a href="changepassword.php" id="a">Change Password</a></button><br>

        <button id="btn"><a href="order.php" id="a">Order Product</a></button><br>

        <button id="btn"><a href="monitor.php" id="a">Monitor The Order Product</a></button><br>

        <button id="btn"><a href="orderdetails.php" id="a">See order details</a></button><br>

        <button id="btn"><a href="productdetails.php" id="a">Product Details</a></button><br>

        <button id="btn"><a href="cancelorder.php" id="a">Cancel Order Product</a></button><br>

        <button id="btn"><a href="exchange.php" id="a">Exchange Product</a></button><br>

        <button id="btn"><a href="reseller.php" id="a">Order reseller product</a></button><br>

        <button id="btn"><a href="feedback.php" id="a">Feedback</a></button><br>

        <button id="btn"><a href="../controller/logout.php" id="a">Logout</a></button><br>

     </div>

     <div class="column" style="background-color:#fff;">
      <h2>Product show</h2>
        <table>
  <tr>
    <th>Product</th>
    <th>Price</th>
    
  </tr>
  <tr>
    <td>Pran Fruto</td>
    <td>10000</td>
   
  </tr>
  <tr>
    <td>Choklet</td>
    <td>120000</td>
   
  </tr>
  <tr>
    <td>Soft Drinks</td>
    <td>220000</td>
    
  </tr>
   <tr>
    <td>Buiscuit</td>
    <td>50000</td>
   
  </tr>
   <tr>
    <td>Chips</td>
    <td>220000</td>
   
  </tr>
  <tr>
    <td>Abc</td>
    <td>40000</td>
   
  </tr>
   <tr>
    <td>Def</td>
    <td>60000</td>
    
  </tr>
   <tr>
    <td>Abcd</td>
    <td>20000</td>
  
  </tr>
   <tr>
    <td>Abcde</td>
    <td>12000</td>
    
  </tr>
  
</table>
       
     </div>
     </div>
   </section>

  
</body>
</html>
