<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Quiz.css">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="Index.php">My Website</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="Index.php">Home</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <div class="jumbotron">
    <h1>Car Sharing</h1>
  </div>
  </div>

  <form name="Login" action="LoginCheck.php" method="post">
    <!--  -->
    <table border="3">
      <tr>
        <th colspan="2">Login</th>
      </tr>
      <tr>
        <td>User ID:</td>
        <td><input type="text" name="UserID" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="text" name="UserPassword" required></td>
      </tr>
      <tr>
        <td colspan="2" class="center"><input type="submit" value="submit"></td>
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
