<?php
include "dbcon.php";
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$fullname = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');


if (!empty($username)){
if (!empty($password)){

$sql = "INSERT INTO user (fullname, username, pword, phone, email)
values ('$fullname','$username','$password','$phone','$email')";
    if ($conn->query($sql)){
        echo '<script>alert("Registration Successful")</script>';
        header("Location: UserLogPage.php");
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
