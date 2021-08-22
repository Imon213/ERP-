
<!DOCTYPE html>
<html>
<head>
  <title>OrderPage</title>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="../js/addfeedback.js"></script>
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
input[type=text], select, textarea {
  width: 100%;
  
  border: 1px solid #ccc;
  border-radius: 12px;
  box-sizing: border-box;

 
}

input[type=submit] {
  background-color: #04AA6D;
  padding: 12px 20px;
  border: none;
  border-radius: 12px;
  
}

input[type=submit]:hover {

}
img{
    border-radius: 20px;
    
    width: 50%
}

.container {
  border-radius: 5px;
  margin: 20px;
  padding: 30px;
  font-size: 20px;
  width: 600px;
  height: 300px;
  color: purple;

}
h3{
  color:purple;
  font-weight: bold;
 
}
.title{
  color: red;
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
    
     
        <div class="container">
              
                <label for="name"> Name</label>
                <input type="text" id="name" name="name" placeholder="Your name.."style="height:50px">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email.."style="height:50px">

                

                <label for="Comment">Comments</label>
                <textarea id="comment" name="comment" value=""  style="height:150px">Write your Comment here...</textarea>

                <input type="button" name= "submit" value="Submit" onclick="Feedback()">
              
            </div>
           
      
       
     </div>
     </div>
   </section>


  
</body>
</html>
