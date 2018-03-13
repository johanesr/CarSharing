<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Quiz.css">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="AvailableOfferDriver.php">My Website</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="Index.php">Log Out</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Action
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="AvailableOfferDriver.php">Available Offers (Driver)</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <div class="jumbotron">
    <h1>Driver</h1>
  </div>
  </div>

  <table border="3">
    <tr>
      <th>Route Number</th>
      <th>Date/Time</th>
      <th>Source Location</th>
      <th>Target Location</th>
      <th>Driver Name</th>
      <th>Average Rating</th>
      <th>Total Ratings</th>
      <th></th>
    </tr>
    <?php
      include('connection.php');
      $query = mysqli_query($connector,"SELECT * FROM Data");
      while($row = mysqli_fetch_assoc($query))
      {
        $cid = $row["RouteNum"];
        echo "<tr>
        <td>".$row["RouteNum"]."</td>
        <td>".$row["Date"]."</td>
        <td>".$row["Source"]."</td>
        <td>".$row["Destination"]."</td>
        <td>".$row["Driver"]."</td>
        <td>".$row["AvgRate"]."</td>
        <td>".$row["TotalRate"]."</td>
        <td><button type=\"button\" class=\"btn btn-success\" onclick=\"window.location.href='DeleteDriver.php?id=$cid'\">Take</button></td>
        </tr>";
      }
    ?>
  </table>

  <br />

  <form name="myForm" action="AvailableOfferAdd.php" method="post">
    <table border="3">
      <tr>
        <th colspan="2">Insert Booking</th>
      </tr>
      <tr>
        <td>Date</td>
        <td><input type="date" name="Date" required></td>
      </tr>
      <tr>
        <td>Source Location</td>
        <td><input type="text" name="Source" required></td>
      </tr>
      <tr>
        <td>Destination Location</td>
        <td><input type="text" name="Destination" required></td>
      </tr>
      <tr>
        <td>Driver Name</td>
        <td><input type="text" name="Name" required></td>
      </tr>
      <tr>
        <td>Average Rating</td>
        <td><input type="number" name="Avg" value="9" required></td>
      </tr>
      <tr>
        <td>Total Rating</td>
        <td><input type="number" name="Total" value="9" required></td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit" value="Submit">Submit</td>
      </tr>
    </table>
  </form>

  <div class = "header">
    <img src="carsharing.jpg">
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
