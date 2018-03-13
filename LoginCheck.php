<?php
  include("connection.php");

  $ID = $_POST["UserID"];
  $Password = $_POST["UserPassword"];

  $result = mysqli_query($connector,"SELECT * FROM User WHERE UserID = '$ID' AND Password = '$Password'");
  $row = mysqli_fetch_assoc($query);
  if ($result == null)
  {
    echo "There is no ID there";
  }
  else
  {
    if ($row["Type"] == "User")
    {
      header("Location: HomeUser.php");
    }
    else
    {
      header("Location: HomeDriver.php");
    }
  }
?>
