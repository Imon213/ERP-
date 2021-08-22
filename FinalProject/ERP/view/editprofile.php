
<!DOCTYPE html>
<html>
<head>
	<title>Edit page</title>
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
    padding: 8px;
    padding: 0px 0px 2px 14px;
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
  height: 600px; 
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
}
.btnn{
         margin-top: 12px;
         margin-left: 82px;
         border: 1px solid #000;
         background-color: #08c;
         padding: 5px 15px 5px 15px;
         font-weight: 600;
         color: #fff;
         transition: 1s;
}
.btnn:hover, .btnn:focus{
         background-color: #000;

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

        <button id="btn"><a href="listcancelorder.php" id="a">List Of the Cancel Order</a></button><br>

        <button id="btn"><a href="exchange.php" id="a">Exchange Product</a></button><br>

        <button id="btn"><a href="feedback.php" id="a">Feedback</a></button><br>

        <button id="btn"><a href="login.php" id="a">Logout</a></button><br>

     </div>
<form method="POST" action="../controller/check.php" onsubmit="return(validate());">
     <div class="column" style="background-color:#fff;">
     	<table border="0" width="100%">
     		<tr>
     			<th>Name</th>
     			<th>Email</th>
     			<th>Phone</th>
     			<th>Password</th>
     			<th>Address</th>

     		</tr>
        
        <?php

        $conn = mysqli_connect("localhost", "root", "", "xcompany");
        if ($conn-> connect_error) {
          die("connection faild:". $conn-> connect_error);
        }


        $sql = "SELECT * from user";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["name"]. "<td><td>". $row["email"]. "<td><td>". $row["gender"]. 
            "<td><td>". $row["password"]. "<td><td>". $row["phone"]. "<td><tr>";
          }
          echo "</table>";
        }
        else{
          echo "0 result";
        }
        $conn-> close();

         ?>
        
        <tr>
          <th><button class="btnn"><a href="update.php" id="a">UPDATE</a></button></th>
        </tr>
        <tr>
          <th><button class="btnn"><a href="delete.php" id="a">DELETE</a></button></th>
        </tr>
     	
     	</table>

       
     </div>
     </div>
   </section>


 </form>

</body>
</html>
