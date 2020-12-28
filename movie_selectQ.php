<?php
session_start();
include "dbcon.php";
$session_mov_id = $_SESSION["session_movie"];
$sql = mysqli_query($conn, "SELECT movie_id FROM movie WHERE movie_name='$session_mov_id'");
$row = mysqli_fetch_array($sql);
$temp_mov_id= $row["movie_id"];
$temp_usr_id = $_SESSION["session_user"];

$date_select = $_SESSION["session_date"];
$time_select = $_SESSION["session_time"];
//combining date and time
$combinedDT = date('Y-m-d H:i:s', strtotime("$date_select $time_select"));

//updating values in seat table
$sql = "INSERT INTO seats(movie_id, user_id, date_time)
VALUES('$temp_mov_id', '$temp_usr_id', '$combinedDT')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

