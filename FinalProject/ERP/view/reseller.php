
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

.box1{
  width: 33%;
  float: left;
}
.box2{
  width: 33%;
  float: left;
}
.box3{
  width: 33%;
  float: left;
}
.box4{
  width: 33%;
  float: left;
}
.box5{
  width: 33%;
  float: left;
}
.box6{
  width: 33%;
  float: left;
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
 
   color: #fff;
   font-weight: 600;
   border-radius: 100px;

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
.imgg{
  width: 30%;
}
.btn{
  background-color: #08c;
  color: #fff;
  font-weight: 500;
  border: 1px solid #000;
  transition: 1s;
}
.btn:hover, .btn:focus{
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
      
       <div class="box1">
        <img src="../images/milk.jpg" class="imgg">
        <h3>Milk </h3>
         <h3>TK -- 40,000</h3>
          <input class="btn" type="submit" value="BUY NOW" name="submit">
       </div>
       <div class="box2">
        <img src="../images/laptop.jpg" class="imgg">
        <h3>Dell Laptop </h3>
        <h3>TK -- 40,000</h3>
        <input class="btn" type="submit" value="BUY NOW" name="submit">
       </div>
        <div class="box3">
          <img src="../images/ch.jpg" class="imgg">
          <h3>Diary Milk </h3>
         <h3>TK -- 40,000</h3>
         <input class="btn" type="submit" value="BUY NOW" name="submit">
       </div>
       <div class="box6">
          <img src="../images/ch.jpg" class="imgg">
          <h3>Diary Milk </h3>
         <h3>TK -- 40,000</h3>
         <input class="btn" type="submit" value="BUY NOW" name="submit">
       </div>
       <div class="box4">
        <img src="../images/milk.jpg" class="imgg">
        <h3>Diary Milk </h3>
        <h3>TK -- 40,000</h3>
        <input class="btn" type="submit" value="BUY NOW" name="submit">
       </div>
       <div class="box5">
        <img src="../images/laptop.jpg" class="imgg">
        <h3>Diary Milk </h3>
         <h3>TK -- 40,000</h3>
         <input class="btn" type="submit" value="BUY NOW" name="submit">
       </div>
        <div class="box6">
          <img src="../images/ch.jpg" class="imgg">
          <h3>Diary Milk </h3>
          <h3>TK -- 40,000</h3>
          <input class="btn" type="submit" value="BUY NOW" name="submit">
       </div>
        <div class="box6">
          <img src="../images/ch.jpg" class="imgg">
          <h3>Diary Milk </h3>
         <h3>TK -- 40,000</h3>
         <input class="btn" type="submit" value="BUY NOW" name="submit">
       </div>
      

      
      

       
     </div>
     </div>
   </section>

        
  
</body>
</html>
