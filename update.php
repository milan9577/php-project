

<?php 

$conn = mysqli_connect('localhost', 'root', '', 'teacher-info');
if (!$conn) {
    die("not connected" . mysqli_connect_error());
}

if(isset($_REQUEST['edit_id'])){
$recv = $_REQUEST['edit_id'];

$query = "SELECT * FROM teacher WHERE id = $recv";
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
          <a href="show.php">Data-show</a>
          <a class="active" href="update.php">Update</a>
          <a class="active" href="delete.php">delete</a>
          </div>

          <div class="container">
              
            <?php 
                while ($row = mysqli_fetch_assoc($comunication)){
            ?>

            <form action="update-data.php" method="post">
              <div class="row">
                <div class="col-25">
                  <label for="lname">User-email</label>
                </div>
                <div class="col-75">
                  <input type="text"  name="email" value="<?php echo $row['email'];?>">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">User-password</label>
                </div>
                <div class="col-75">
                  <input type="text" id="lname" name="password" value="<?php echo $row['password'];?>">
                </div>
              </div>
              <div class="btn">
                <button class="show-btn btn" type="update" name="update">Update</button>
                <input type="hidden" name="updating_hidden_id" value="<?php echo $recv; ?>">
              </div>

            </form>
            <?php  
                }
            }
          ?>
          </div>
         

</body>
</html>





