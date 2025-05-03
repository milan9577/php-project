<?php

$conn = mysqli_connect('localhost', 'root', '', 'teacher-info');
if (!$conn) {
    die("not connected" . mysqli_connect_error());
}

$recv = $_REQUEST['id'];

$query = "DELETE FROM teacher WHERE id = $recv";
$delete_query = mysqli_query($conn, $query);

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
            <a href="main.php">Login-page</a>
            <a href="show.php">Data show</a>
            <a href="update.php">Update</a>
            <a class="active" href="delete.php">delete</a>
          </div>

          <div class="show-result">
            <div class="container">
               <?php 
                if($delete_query){
                    ?>

                    <h1><?php echo "Delete Data"; ?></h1>

                    <?php
                }
               ?>
              </div>
          </div>
</body>
</html>

