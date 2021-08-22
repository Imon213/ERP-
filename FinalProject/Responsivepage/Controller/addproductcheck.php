<?php
require('../db.php');
$conn = getConnection();
$filename=strtolower($_FILES['image']['name']);
$filetemp=$_FILES['image']['tmp_name'];
$location='../product/'.$filename;

      $name=  $_POST['name'];
      $id=  $_POST['id'];
      $price= $_POST['price'];
      $type=  $_POST['type'];
      $details= $_POST['details'];
      if($name!='' && $id!='' && $price!='' && $details!='')
      {
        $sql1="SELECT * FROM product WHERE id='{$id}'";
        $result1=mysqli_query($conn, $sql1);
        
         if(mysqli_num_rows($result1)> 0)
         {
         
         }
         else
         {
          $sql = "INSERT INTO product (name,id,price,type,details,image) VALUES('$name','$id','$price','$type','$details',
          '$filename')";
              $result = mysqli_query($conn, $sql); 
              if($result)
              {
                  move_uploaded_file($filetemp,$location);
                  echo 'Product Successfuly Uploaded';
                  header('location:../view/addproduct.php?msg=success');
              }
            
         }
      }
      else
      {
        header('location:../view/addproduct.php?msg=null');
      }
    
      

    
?>