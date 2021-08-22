  <?php

        $conn = mysqli_connect("localhost", "root", "", "xcompany");
        if ($conn-> connect_error) {
          die("connection faild:". $conn-> connect_error);
        }


        $sql = "SELECT * from product";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["productname"]. 
            "<td><td>". $row["productcode"]. "<td><td>". $row["quantity"]. "<td><tr>";
          }
          echo "</table>";
        }
        else{
          echo "0 result";
        }
        $conn-> close();

         ?>
      