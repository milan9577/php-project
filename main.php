
<?php

if (isset($_POST['login'])) {

    $femail = $_POST['email'];
    $password = $_POST['password'];


  $conn = mysqli_connect('localhost', 'root', '', 'teacher-info');
if (!$conn) {
    die("not connected" . mysqli_connect_error());
}

    $sql = "INSERT INTO teacher (email, password) VALUES ('$femail', '$password')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
      die("not inserted" . mysqli_error());
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>project</title>
</head>
<body>
    

        <div class="logo-1">
            <img src="img/logo.jpg" alt="IMG">

            <div class="text-1">
                <h1>Mcode.com</h1>
            </div>
        </div>
        <div class="topnav">
        <a href="insert.php">Signup</a>
          <a class="active" href="main.php">Login-page</a>
          <a href="show.php">Data-show</a>
          <a href="update.php">Update</a>
          <a href="delete.php">delete</a>
        </div>


          <div class="container">
            <form action="" method="post">
              <div class="row">
                <div class="col-25">
                  <label for="lname">User-email</label>
                </div>
                <div class="col-75">
                  <input type="text"  name="email" placeholder="User-email..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">User-password</label>
                </div>
                <div class="col-75">
                  <input type="text"  name="password" placeholder="User-password..">
                </div>
              </div>
              <div class="btn">
                <button class="show-btn btn" type="login " name="login">login </button>
              </div>

            </form>
          </div>

</body>
</html>






