<?php
  include("connection.php");

  $ID = $_POST["UserID"];
  $Password = $_POST["UserPassword"];

  $result = mysqli_query($connector,"SELECT * FROM User WHERE UserID = '$ID' AND Password = '$Password'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result)<= 0)
  {
    echo "There is no ID there";
  }
  else
  {
    if ($row["Type"] === "User")
    {
      header("Location: HomeUser.php");
    }
    else
    {
      header("Location: HomeDriver.php");
    }
  }
?>
