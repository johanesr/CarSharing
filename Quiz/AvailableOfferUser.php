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
        <a class="navbar-brand" href="AvailableOfferUser.php">My Website</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="Login.php">Log Out</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Action
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="AvailableOfferUser.php">Available Offers (USER)</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <div class="jumbotron">
    <h1>User</h1>
  </div>
  </div>

    <table>
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
       <tr>
         <th>1</th>
         <td>03/20/2018 20:00</td>
         <td>Pantai Mutiara</td>
         <td>Emporium Mall</td>
         <td>Jacob</td>
         <td>4</td>
         <td>5</td>
         <td><button type="button" class="btn btn-success">Book</button></td>
       </tr>
       <tr>
         <th>2</th>
         <td>04/10/2018 16:00</td>
         <td>Pantai Indah Kapuk</td>
         <td>Rumah Sakit PIK</td>
         <td>Yosua</td>
         <td>1</td>
         <td>2</td>
         <td><button type="button" class="btn btn-success">Book</button></td>
       </tr>
       <tr>
         <th>3</th>
         <td>04/10/2019 13:00</td>
         <td>BINUS University</td>
         <td>Rumah Sakit PIK</td>
         <td>Pores</td>
         <td>3</td>
         <td>5</td>
         <td><button type="button" class="btn btn-success">Book</button></td>
       </tr>
     </table>

  <div class = "header">
    <img src="carsharing.jpg">
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
