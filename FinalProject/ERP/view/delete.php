
<!DOCTYPE html>
<html>
<head>
  <title>OrderPage</title>
<!DOCTYPE html>
<html>
<head>
  <title>Order page</title>
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
   color: #fff;
   font-weight: 600;

}
 #btn:hover, #btn:focus
 {
    background-color: #000;
    color: #fff;
}
#s-btn{
   margin-top: 12px;
   border: 1px solid #000;
   background-color: #08c;
   padding: 5px 15px 5px 15px;
   margin-left: 91px;
   color: #fff;
   font-weight: 600;
   text-transform: uppercase;

}
 #s-btn:hover, #s-btn:focus
 {
    background-color: #000;
    color: #fff;
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
      <h2>INSERT</h2>
      <form method="POST" action="../controller/insertcheck.php" onsubmit="return(validate());">
    <fieldset id="field">
      <legend>Insert</legend>
      <table id="tbl">
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" placeholder="Enter Name" class="input" id="name"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" placeholder="Enter Email" class="input" id="email"></td>
        </tr>
        
       
        <tr>
          <td>Phone</td>
          <td><input type="tel" name="phone" placeholder="Enter Phone " class="input" id="phone"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" placeholder="Enter password" class="input" id="password"></td>
        </tr>
         <tr>
          <td>Address</td>
          <td><input type="text" name="address" placeholder="Enter address" class="input" id="address"></td>
        </tr>
        
        
        
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="DELETE" id="s-btn"></td>
        </tr>
      </table>
    </fieldset>
  </form>
     
       
     </div>
     </div>
   </section>

        
  
</body>
</html>
