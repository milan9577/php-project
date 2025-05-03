

<?php

$conn = mysqli_connect('localhost', 'root', '', 'teacher-info');
if (!$conn) {
    die("not connected" . mysqli_connect_error());
}

if(isset($_REQUEST['update'])){

 $femail = $_REQUEST['email'];
 $password = $_REQUEST['password'];
 $hidden_id = $_REQUEST['updating_hidden_id'];

 $update_query = "UPDATE teacher SET email='$femail', password='$password' WHERE id=$hidden_id";
 $final_query = mysqli_query($conn, $update_query);

 if ($final_query){
     header("location: show.php?updated");
 }

}     


?>