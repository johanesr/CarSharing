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
        <a class="navbar-brand" href="HomeUser.php">My Website</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="Index.php">Log Out</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Action
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="AvailableOfferUser.php">Available Offers</a></li>
            <li><a href="NoPage.php">My Routes Booked</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <div class="jumbotron">
    <h1>Car Sharing (USER)</h1>
  </div>
  </div>

  <div class = "header">
    <img src="carsharing.jpg">
  </div>


  <div class="TopPage">
    <a href="AvailableOfferUser.php">Available Offers</a>
    <a href="NoPage.php">My Routes Booked</a>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
