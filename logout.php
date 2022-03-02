<?php
  require "php/db_connection.php";

  if($con) {
    $query = "UPDATE admin_credentials SET IS_LOGGED_IN = 'false'";
    $result = mysqli_query($con, $query);
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <meta charset="utf-8">
    <title>Logout</title>
    <script src="js/restrict.js"></script>
  </head>
  <body style=" 
    height: 100px;
    background-color: #011627;
    color: white;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    
    margin: auto;">
<center><h1>Logged Out Successfully!</h1>
<button onClick="location.href='./index.php'" class="btn btn-outline-primary">Return</button></center>
  </body>
</html>
