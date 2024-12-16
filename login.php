<?php
  if(isset($_POST['submit'])){
    include "db_connection.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "select * from account where username = '$username'";
    $sql = "select * from account where pass = '$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    if($row){
      if($pass = $row["pass"]){ 
        header("Location: home.php");
    } else{
      echo "NO USER FOUND";
    }
} 
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <?php include "navbar.php";
    ?>

    <div id ="form">
        <h1> Login </h1>
        <form name="form" action="home.php" method = "POST";>
          <label>Username</label>
          <input type="text" id="username" name="username" required><br><br>
          <label>Password</label>
          <input type="password" id="pass" name="pass" required><br><br>
          <input type="submit" id="custom-button" value="Login" name="submit"/>
        </form>
    </div>

  </body>
</html>