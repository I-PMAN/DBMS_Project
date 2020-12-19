<?php
include "dbcon.php";
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$fullname = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');

$admin_hash_password = password_hash('password', PASSWORD_DEFAULT);

if (!empty($username)){
if (!empty($password)){
/*
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "movie_db";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
*/
$sql = "INSERT INTO admi (fullname, username, pword, phone, email)
values ('$fullname','$username','$admin_hash_password','$phone','$email')";
    if ($conn->query($sql)){
        echo '<script>alert("Registration Successful")</script>';
        header("Location: page2.php");
    }
    else{
        echo "Error: ". $sql ."". $conn->error;
    }
$conn->close();
}

else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
