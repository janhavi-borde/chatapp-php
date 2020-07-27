<?php
$conn = mysqli_connect("127.0.0.1","root","janhavi23","mydatabase","3306");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>