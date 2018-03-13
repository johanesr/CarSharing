<?php
  include("connection.php");

  $date = $_POST["Date"];
  $source = $_POST["Source"];
  $destination = $_POST["Destination"];
  $name = $_POST["Name"];
  $avg = $_POST["Avg"];
  $total = $_POST["Total"];

  $insert = mysqli_query($connector,"INSERT INTO Data VALUES
    ('null','$date','$source','$destination','$name','$avg','$total')");
  header("Location: AvailableOfferDriver.php");
?>
