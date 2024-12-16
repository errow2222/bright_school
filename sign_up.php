<?php
  include "db_connection.php";

if (isset($_POST["submit"])) {
  $stud_name = $_POST["name"];
  $username = $_POST["username"];
  $pass = $_POST["pass"];
  $phone_num  = $_POST["phone_num"];
  
  $query = "INSERT INTO account VALUES ('', '$stud_name', '$username', '$pass', '$phone_num')";
  mysqli_query($conn, $query);
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php include "navbar.php";
    ?>
    <div id ="form">
        <h1> Sign Up </h1>
        <form name="form" action="" method = "POST";>
          
          <label>Name</label>
          <input type="text" id="name" name="name" required><br><br>

          <label>Username</label>
          <input type="text" id="username" name="username" required><br><br>

          <label>Password</label>
          <input type="password" id="pass" name="pass" required><br><br>

          <label>Contact Number:</label>
          <input type="text" id="phone_num" name="phone_num" required><br><br>

          <input type="submit" id="custom-button" value="Sign Up" name="submit"/>
        </form>
    </div>
  </body>
</html>