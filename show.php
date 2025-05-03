

<?php 

$conn = mysqli_connect('localhost', 'root', '', 'teacher-info');
if (!$conn) {
    die("not connected" . mysqli_connect_error());
}
$query = "SELECT * FROM teacher";
$comunication = mysqli_query( $conn, $query );
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
            <a  class="active" href="show.php">Data show</a>
            <a href="update.php">Update</a>
            <a href="delete.php">delete</a>
          </div>

          <div class="show-result">
            <div class="container">
                <table>
                    <tr>
                      <th><b>ID</b></th>
                      <th><b>email</b></th>
                      <th><b>password</b></th>
                      <th><b>EDIT</b></th>
                      <th><b>DELETE</b></th>
                    </tr>

                    <?php 
                        while ( $row = mysqli_fetch_assoc($comunication) ){
                          $db_id = $row['id'];
                    ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td> <?php echo $row['email']; ?> </td>
                      <td><?php echo $row['password']; ?></td>
                      <td><a href="update.php?edit_id=<?php echo $db_id ?>" class="show-btn">edit</a></td>

                      <td><a href="delete.php?id=<?php echo $db_id ?>" class="show-btn">delete</a></td>
                    </tr>

                    <?php
                       }
                    ?>
                  </table> 
              </div>
          </div>
</body>
</html>

