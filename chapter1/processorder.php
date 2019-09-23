<!DOCTYPE html>
<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2> 
    <?php
	$browserAgent = $_SERVER['HTTP_USER_AGENT'];
	echo $browserAgent;
    echo '<p>Order processed.</p>';
    ?>    
  </body>
</html>
