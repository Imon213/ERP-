
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

         <script>

    function validate(){
            
            var name = document.getElementById('name').value;
            var address = document.getElementById('address').value;
            var product = document.getElementById('product').value;
            let phone = document.getElementById('phone').value;
            var quantity = document.getElementById('quantity').value;
            var price = document.getElementById('price').value;
           
            c
       if(name == ''){
        alert('Name: Null value');
      }
            else if(name.length<2 && (name>='A' && name<='Z' || name>='a' && name<='z')){
                    alert('Name: Contains at least two words');
                    }
            else if(name >='0'  && name<='9' || name=='~' || name=='!' || name=='@' || name =='#' || name=='$' || name=='%' || name=='^' || name=='&' || name=='*' || name=='()'|| name=='/' ){
                    alert('Name: Can contain a-zor A-Zor dot(.) or dash(-)');
                    }
            else if(name>='0' && name<='9'){
                    alert('Name: Must be starts with letter');
                    }
            //Address Validation
            if(address  != ""){
        document.getElementById('head1').innerHTML = address;
      }else{
        alert('Address: Null value');
      } 
            
            //Product Validation
            if(product  != ""){
        document.getElementById('head1').innerHTML = product;
      }else{
        alert('Product: Null value');
      } 

            //Phone Validation
            if(phone  != ""){
        document.getElementById('head1').innerHTML = phone;
      }else{
        alert('Phone: Should be at least 11 chracter');
      } 
       //quantity Validation
            if(quantity  != ""){
        document.getElementById('head1').innerHTML = quantity;
      }else{
        alert('Quantity: Should not be null');
      } 
       //price Validation
            if(price  != ""){
        document.getElementById('head1').innerHTML = price;
      }else{
        alert('Price: Should not be null');
      } 
          
    }
  </script>

  
</body>
</html>
