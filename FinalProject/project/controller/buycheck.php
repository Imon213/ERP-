<?php
session_start();
  $code=$_GET['buy'];
 $name1=$_SESSION['user']['name'];
 
  require('../db.php');
$conn = getConnection();
$sql = "SELECT * FROM product Where id='$code'";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result))
{
 $name=$row['name'];
 $price=$row['price'];
 $type=$row['type'];
 $sql1="INSERT INTO resorder (name,code,price,type,email) VALUES ('$name','$code','$price','$type','$name1')";
 $res1=mysqli_query($conn,$sql1);
 if($res1)
 {
   
 }


}
?>