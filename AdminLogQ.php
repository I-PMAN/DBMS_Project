<?php
session_start();
require "dbcon.php";
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

//$hash_pass=password_hash($password,PASSWORD_DEFAULT);

$query = mysqli_query($conn, "SELECT * FROM admi WHERE username = '$username'");
if(mysqli_num_rows($query) > 0){
  $row = mysqli_fetch_assoc($query);
  $user_db_pass = $row['pword'];
  if($password === $user_db_pass){
    //session_regenerate_id();
    //$_SESSION['cookies_name'] =  $row['username'];  
    header('Location: AdminPage.php');
    exit;
  }
  else{
    // INCORRECT PASSWORD
    $error_message = "Incorrect Username or Password.";
  }
}
else{
  // EMAIL NOT REGISTERED
  $error_message = "Incorrect Username or Password.";
}
?>