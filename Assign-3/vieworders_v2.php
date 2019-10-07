<?php
  // create short variable name
  $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bob's Auto Parts - Customer Orders</title>
    <style>
      table {
        border-collapse: collapse;
      }
      table, th, td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2> 
    <?php
      $servername = "localhost";
      $username = "mahmed29";
      $password = "";
      $dbname = "mahmed29";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
             }
      $sql = "SELECT OrderId, TiresQuantity, OilQuantity, SparkPlugQuantity, Address FROM Orders";
    
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        echo "<table><tr><th>Order Id</th><th>Tire Quantity</th><th>Oil Quantity</th><th>Spark Quantity</th><th>Address</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["OrderId"]."</td><td>".$row["TiresQuantity"]."</td><td>".$row["OilQuantity"]."</td><td>".$row["SparkPlugQuantity"]."</td><td>".$row["Address"]."</td></tr>";
      }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close(); 
    ?>
    <a href="./index.html">New Order</a>
  </body>
</html>

