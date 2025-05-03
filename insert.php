
<?php

if (isset($_POST['signup'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];



  $conn = mysqli_connect('localhost', 'root', '', 'teacher-info');
if (!$conn) {
    die("not connected" . mysqli_connect_error());
}

    $sql = "INSERT INTO signup_data (id, user-name, user-email, mobile, password) VALUES ('null', '$name', '$email', '$mobile', '$password')";

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
        <a class="active" href="insert.php">Signup</a>
          <a href="main.php">Login-page</a>
          <a href="show.php">Data-show</a>
          <a href="update.php">Update</a>
          <a href="delete.php">delete</a>
        </div>


          <div class="container">
            <form action="main.php" method="post">
              <div class="row">
                <div class="col-25">
                  <label for="lname">User-name</label>
                </div>
                <div class="col-75">
                  <input type="text"  name="name" placeholder="User-name..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">User-email</label>
                </div>
                <div class="col-75">
                  <input type="email"  name="email" placeholder="User-email..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">mobile</label>
                </div>
                <div class="col-75">
                  <input type="number"  name="mobile" placeholder="mobile..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">User-password</label>
                </div>
                <div class="col-75">
                  <input type="password"  name="password" placeholder="User-password..">
                </div>
              </div>
              <div class="btn">
                <button class="show-btn btn" type="Signup" name="signup">Signup </button>
              </div>

            </form>
          </div>

</body>
</html>






