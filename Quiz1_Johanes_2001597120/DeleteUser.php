<?php
  include("connection.php");

  $id = $_GET["id"];
  $delete = mysqli_query($connector,"DELETE FROM Data WHERE RouteNum='$id'");

  header("Location: AvailableOfferUser.php");
 ?>
